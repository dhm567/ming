<template>
    <div class="warp">
        <div class="la">
            <label>{{items[0]}}</label>
            <input type="text" name="" v-model="jia.name">
        </div>
        <div class="la">
            <label>{{items[1]}}</label>
            <input type="text" name="" v-model="jia.age">
        </div>
        <div class="la">
            <label>{{items[2]}}</label>
            <select name="" v-model="jia.nan">
                <option :value="n" v-for="n in nv">{{n}}</option>
            </select>
        </div>
        <button @click="tan">添加</button>
        <button @click="gei">修改</button>
    </div>
</template>
<script>
    export default{
        data(){
            return{
               nv:['男','女'],
               jia:{
                name:this.shu.name,
                age:this.shu.age,
                nan:this.shu.nan
               } 
            }
        },
        props:['items','shu'],
        methods:{
            tan(){
                if(!this.jia.name||!this.jia.age){
                    return false
                }
                this.$emit('tanjia',this.jia)
            },
            gei(){
                if(!this.jia.name||!this.jia.age){
                    return false
                }
                this.$emit('xiugai',this.jia)
            }
        }
    }
</script>
<style>
 .warp{width: 220px;height: 200px;position: absolute;top: 40%;left: 40%;box-shadow: 0px 0px 5px #999;padding: 20px;}   
 .la{margin-bottom: 20px;font-size: 16px;text-align: right;}
 .la:last-child{text-align: center;}
</style>