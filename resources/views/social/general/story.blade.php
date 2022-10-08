
<!-------------Story------------>
<div class="bg-white rounded-15 p-2 mb-3">

    <div class="owl-carousel">


        <div class="story">
            <div class="add position-relative">

                @if($User->image!=null)
                    <img src="{{url('/uploads/'.$User->image)}}" alt="" class=" rounded-circle img-fit">
                @else
                    <img src="{{url('/general/img/default-user.jpg')}}" alt="" class=" rounded-circle img-fit">
                @endif


                <div class="status-icon position-absolute" ><i class="fas fa-plus cursor-p" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" ></i></div>
            </div>

            <div class="title">Create Story</div>
        </div>



        @foreach($Stories as $StoriesTemp)
            <a href="javascript:void(0)" class="story-item" id="{{$StoriesTemp->id}}" style="color: gray; text-decoration: none">
                <div class="item-story">


                    @if($StoriesTemp->user_image!=null)
                        <img src="{{url('/uploads/'.$StoriesTemp->user_image)}}" alt="">
                    @else
                        <img src="{{url('/general/img/default-user.jpg')}}" alt="">
                    @endif

                    <input type="text" value="{{$StoriesTemp->thumbnail}}" class="story-thumbnail" hidden>

                </div>

                <div class="title" style="font-size: 12px; font-weight: bold; text-align: center">{{$StoriesTemp->user_full_name}}</div>
            </a>
        @endforeach

    </div>

</div>
<!------------/Story------------>
