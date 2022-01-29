@include("header")
    	<div class="center">
    		<div class="message">
        		<p>From: {{$message->name}}</p>
            	<p>Phone: {{$message->phone}}</p>
            	<p>E-Mail: {{$message->email}}</p>
            	<p>Content:
            		<p>{{$message->message}}</p>
            	</p>
        	</div>
    	</div>
 @include("footer")