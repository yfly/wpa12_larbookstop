@extends ('layouts.master')
@section('content')
<div class="container">
 	<ol class="breadcrumb">
                            <li>
                      		<a href="/">Home</a>
                      	</li>
                            <li>
                            	<a href="#">Category</a>
                            </li>
                      	<li class="active">all product by category</li>
             </ol>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<tr class="info">
					<td>
						<h4>
							{{ $category->name }} 
							<em>
								<small> This category have <span class="label label-success">{{ $category->books()->count() }}</span> books </small>
							</em>
						</h4>
					</td>
				</tr>

				@foreach ($books as $book)
				<tr>
					<td>
					<div class="row">
					<div class="col-md-3">
						<img src="{{ URL::to('/'); }}/uploads/books/{{ $book->image }}" class="img-thumbnail">
					</div>
					<div class="col-md-5">
					<br/><br/><br/>
						<table class="table">
							<tr>
								<td>Name : </td>
								<td>{{ $book->bookname }}</td>
							</tr>
							<tr>
								<td>Author : </td>
								<td>{{ $book->author }}</td>
							</tr>
							<tr>
								<td>Price : </td>
								<td>{{ $book->author }}</td>
							</tr>
							<tr>
								<td colspan="2">
									<a href="{{ URL::to('detail')}}/{{ $book->id }}" ><span class="label label-info">More info</span></a>
								</td>
							</tr>
						</table>
						
					</div>
					</div>
					</td>
				</tr>
				@endforeach
			</table> 
		</div> 
	</div>
</div>
<!-- Body EndHere -->
@stop
