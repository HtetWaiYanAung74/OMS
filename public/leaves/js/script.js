
document.addEventListener("DOMContentLoaded",function(){
let addbutton = document.querySelector("#add");
let result = document.querySelector("#selectinput");
let addbutton1 = document.querySelector("#add1");
let result1 = document.querySelector("#selectinput1");
addbutton.onclick = function(){
let newdiv = document.createElement('div')
newdiv.innerHTML = `
<select  class="form-control mt-2 " name="leader[]">
<option value="" disabled selected>Choose another</option>
@foreach($leaders as $leader)

     <option value="{{$leader->id}}">{{$leader->fname}} {{$leader->lname}}</option>
@endforeach
     </select>
`
result.append(newdiv) 
return false;
}
addbutton1.onclick = function(){
 let newdiv1 = document.createElement('div')
 newdiv1.innerHTML = `
 <select  class="form-control mt-2  " name="sensei[]">
 <option value="" disabled selected>Choose another</option>
 @foreach($senseis as $sensei)
     <option value="{{$sensei->id}}">{{$sensei->fname}} {{$sensei->lname}}</option>
 @endforeach
         </select>
       
          
 `   
 result1.append(newdiv1) 
 return false;
}

let clear = document.querySelector("#clear");
clear.onclick = function(){

document.getElementById('newform').reset();

}

}) 
