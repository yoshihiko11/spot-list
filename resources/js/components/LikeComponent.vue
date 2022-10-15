<template>
    <div>
        <div v-if="show_flg === true">
            <button v-if="status === false" class='btn like-button' @click="like()" >
              <i class="fa fa-thin fa-thumbs-up" style="font-size: 30px;"><span style="font-size: 15px;">{{count}}</span></i>
            </button>
            <button v-else class='btn liked-button' @click="like()" >
              <i class="fa fa-solid fa-thumbs-up" style="font-size: 30px; color:#0099FF;"><span style="font-size: 15px;">{{count}}</span></i>
            </button>
        </div>
        <div v-else>
            <button class='btn like-button' @click="like()" >
              <i class="fa fa-thin fa-thumbs-up" style="font-size: 30px;"><span style="font-size: 15px;">{{count}}</span></i>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    props: ['post_id', 'show_flg'],
    data() {
        return {
            status: false,
            count: "",
        }
    },
    created() {
        this.like_check()
        this.counts()
    },
    methods: {
        like_check() {
            const id = this.post_id
            const array = ["/posts/",id,"/check"];
            const path = array.join('')
            axios.get(path).then(res => {
                if(res.data.like) {
                    this.status = true
                } else {
                    this.status = false
                }
            }).catch(function(err) {
                console.log(err)
            })
        },
        like() {
            const id = this.post_id
            const array = ["/posts/",id,"/likes"];
            const path = array.join('')
            axios.post(path).then(res => {
                this.like_check()
                this.counts()
            }).catch(function(err) {
                console.log(err)
            })
        },
        counts() {
            const path = "/posts/" + this.post_id + "/count";
            axios.get(path).then(res => {
                this.count = res.data.count;
            }).catch(function(err) {
                console.log(err);
            })    
        }
    },
}
</script>