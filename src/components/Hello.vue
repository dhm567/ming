<template>
    <div class="lb" style="height:800px;" @scroll="onScroll($event)">
       <table>
         <thead>
           <tr>
             <th v-for="item in items">{{item}}</th>
             <th>删除</th>
           </tr>
         </thead>
         <tbody>
           <tr v-for="(a,i) in arr">
             <td v-for="item in items" @click="xiu(a,i)">{{a[item]}}</td>
             <td class="delete" @click="expression(i)">删除</td>
           </tr>
         </tbody>
       </table>
       <button @click="xs">点击</button>
       <v-tan :items="items" v-if="show" @tanjia="jq" @xiugai="xiugaiq" :shu="sz"></v-tan>
    </div>
    
</template>
<script>
import tan from './tan'
import todos from '../todos'

 export default{
    name:"hello",
    data(){
      return{
        /*arr:todos.fetch(),*/
        arr:[{
          name:'deng',
          age:20,
          nan:'男'
        },{
          name:'liu',
          age:14,
          nan:'男'
        },{
          name:'long',
          age:12,
          nan:'男'
        }],
        items:['name','age','nan'],
        show:false
      }     
    },
    /*watch:{
        arr: {
          handler: function (item) { 
            todos.save(item)
          },
          deep: true
        }
    },*/
    components:{
      'v-tan':tan
    },
    methods:{
      xs:function(){
        this.show=!this.show
        this.sz={name:'',age:'',nan:'男'}
      },
      jq(jia){
        this.arr.push(jia);
        console.log(jia)
        this.show=!this.show
      },
      expression(event){
        this.arr.splice(event, 1),
        console.log(event)
      },
      xiu(a,i){
        this.show=!this.show
        this.sz=a;
        this.ind=i;
        console.log(this.sz)
      },
      xiugaiq(jia){
        this.arr.splice(this.ind,1,jia)
        this.show=!this.show
      },
      get(){
        this.$http.get('http://127.1.0.1/aa/cc/index.php').then(response => {
          // resolve to Blob
          console.log(response.body)
          this.aa=response.body
        })
      }
    },
    created(){   
      /*window.onscroll=function(){
        this.get()
      }*/

    },
    mounted(){
    this.get()
    $(window).on('scroll', () => {
      if ($(window).scrollTop()>10) {
          this.arr.push(this.aa)
          console.log(this.aa)
          console.log(this.arr)
        }
      })
      
    }
 }

</script>
<style type="text/css" media="screen">
.delete{padding: 5px;color: #fff;background-color: red;}
</style>