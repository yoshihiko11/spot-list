<template>
    <div>
        <button v-if="status == false" type="button" @click.prevent="like" class="btn btn-outline-warning">Like</button>
        <button v-else type="button" @click.prevent="like" class="btn btn-warning">Liked</button>
        <p class="card-text mb-0"><small class="text-muted">いいね数<{{$item->likes->count()}}</small></p>
    </div>
</template>

<script>
export default {
 props: ['post_id'],      
 data() {
   return {
     status: false,
   }
 },
 created() {
   this.like_check()
 },
 methods: {
   like_check() {
     const id = this.post_id
     const array = ["/posts/",id,"/check"];
     const path = array.join('')
     axios.get(path).then(res => {
        console.log(res.data.like);
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
     console.log(path);
     axios.post(path).then(res => {
       this.like_check()
     }).catch(function(err) {
       console.log(err)
     })
   }
 }
}
</script>