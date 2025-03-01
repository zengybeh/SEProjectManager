@extends('layouts.student_topbar')
@section('content')
<script>
    var element = document.getElementById("courses");
    element.classList.add("show");
</script>

<body>
    <div class= "container">

        
    @foreach($courseInfo['courseObj'] as $course)
        <h2 Style="margin-top:5%;" >Welcome to {{$course->Name}}</h2>

        <h4 Style="margin-top:5%;">Course Description</h4>

        <p>{{$course->Description}}</p>

        <h4 Style="margin-top:5%;">Reading material</h4>

        <a href="#">News from the cloude</a>
        <br>
        <a href="#">The Agile manifesto</a>
    
    <h4 Style="margin-top:5%;">Surveys</h4>
        @foreach($courseInfo['surveysObj'] as $surveys)
                <a href="{{route('ViewSurvey',['id'=>$surveys->id])}}">{{$surveys->SurveyName}}</a>
                <br>
        @endforeach
        <div class="row">

        <button class="btn btn-outline" onclick="window.location.href='{{route('SurveyFromCourse',['id'=>$course->id])}}'">View Surveys</button>
        </div>

    @endforeach


    
    
    

    

    




    </div>

</body>
@endsection

