@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Submission List</h1>
    </div>

    @if (Auth::user())
    <div class="container p-2">
        <a href="submission/create" class="btn btn-sm btn-secondary">Submit a new paper</a>
    @endif
        <table class="table">
            <tr>
                <td>Paper ID</td>
                <td>Author</td>
                <td>Type</td>
                <td>Title</td>
                <td>Abstract</td>
                <td>Location</td>
                <td>Score</td>
                <td>Action</td>
            </tr>

            
                @foreach ($submissions as $row)
                <tr>
                    <td>{{ $row -> ID }}</td>
                    <td>{{ $row -> User -> Name }}</td>
                    <td>{{ $row -> Paper_type }}</td>
                    <td>{{ $row -> Title }}</td>
                    <td>{{ $row -> Abstract }}</td>
                    <td>{{ $row -> Location ->Location }}</td>
                    <td>{{ $row -> Review -> Result }}</td>
                    
                    @if (isset(Auth::user() -> ID) && Auth::user() -> ID == $row -> User_ID || Auth::user() -> access_level == 2)

                    <td>
                        <div>
                            <button class="btn btn-primary reviewButton" 
                            data-paper-id="<?php echo $row['ID']; ?>">
                                Reviewer
                            </button>
                        </div>
                    </td>
                        
                    <td>
                        <a href="submission/{{ $row-> ID}}/edit"
                            class="btn btn-warning"> Edit
                        </a>
                        
                    </td>    

                    <td>
                        <form method="POST" action="submission/ {{ $row -> ID}} ">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    @endif
                </tr>
            @endforeach
        </table>
			
		<div id="reviewContainer">
        	<p id="hiddenInfo"></p>
			<ul id="reviewInfo"></ul>
		</div>
    </div>
	
	<script type="text/javascript">
		function get_reviewer() {
			$(".reviewButton").click(function() {
				$("#hiddenInfo").html("Review information: reviewer name and reviewer score");

				var paperID = $(this).data("paper-id");
                console.log("Testtt");

				review_info(paperID);
			});
		};

		function review_info(paperID) {
			$.ajax({
				url: '/ecahyadi/Tutorial_Submission/Tutorial6/engine.php',
				method: 'GET',
				data: {paperID: paperID},
				success: function(data) {
					$("#reviewInfo").html(data);
				},
				error: function() {
					$("#reviewInfo").html("Failed to fetch the revirewer information.");
				}
			});
		};

		$(document).ready(get_reviewer);
	</script>

@endsection