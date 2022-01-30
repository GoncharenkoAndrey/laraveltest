@include("header")
    	<div class="center">
    		<table class="table">
        		<thead>
        			<tr>
        				<th>
        					Name
        			 	</th>
        			 	<th>
        			 	 Phone
        			 	</th>
        			 	<th>
        			 		E-Mail
        			 	</th>
        			 	<th>
        			 		Text
        			 	</th>
        			</tr>
    			</thead>
    			<tbody>
        			@foreach($messages as $message)
        			<tr>
            			<td data-label="Name: ">
            				{{$message->name}}
            			</td>
            			<td data-label="Phone: ">
            				{{$message->phone}}
            			</td>
            			<td data-label="E-Mail: ">
            				{{$message->email}}
            			</td>
            			<td data-label="Text: ">
            				{{$message->message}}
            			</td>
            		</tr>
        			@endforeach
    			</tbody>
    		</table>
    	</div>
@include("footer")