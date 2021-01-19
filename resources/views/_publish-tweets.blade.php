<div class="border border-blue-300 rounded-lg mb-6 px-8 py-6"> 
    <form method="POST" action='/tweets' enctype="multipart/form-dat">
    	@csrf
        <div class="flex items-center">  

        <textarea name='body' value='{{old('body')}}'  class="w-full border-2 focus:outline-white 
         @error('body')  border-2 border-red-400 border-solid
         @enderror border-gray-300"></textarea>
            <input type="file" name="image" class="bg-blue-400">
        </div>

        <hr class="my-4">

        <footer class="flex justify-between">
             	
                <img src="{{$user->avatar}}" class="w-10 h-10  rounded-full mr-4">
            
            <button 
            type="submit" 
            class="bg-blue-400 rounded-lg p-2 my-2 hover:bg-blue-500">submit
    		</button>
        </footer>
    </form>
    @error('body')
    	<div class="text-red-500 text-sm">{{$message}}</div>
    @enderror
 </div>