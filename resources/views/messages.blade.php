@include("header")
    	<div class="center">
    		<table class="message">
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
            			<td>
            				{{$message->name}}
            			</td>
            			<td>
            				{{$message->phone}}
            			</td>
            			<td>
            				{{$message->email}}
            			</td>
            			<td>
            				{{$message->message}}
            			</td>
            		</tr>
        			@endforeach
    			</tbody>
    		</table>
    	</div>
@include("footer")