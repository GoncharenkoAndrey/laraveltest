@include("header")
    	<div class="center">
        	<form class="contact_form" action="/contact" method="POST">
        		@csrf
        		<fieldset>
        			<label for="name">Name:</label>
        			<input type="text" name="name" />
        			@error('name')
    					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
        		</fieldset>
        		<fieldset>
        			<label for="phone">Phone:</label>
        			<input type="text" name="phone" />
        			@error("phone")
        				<div class="alert alert-danger">{{ $message }}</div>
					@enderror
        		</fieldset>
        		<fieldset>
        			<label for="email">E-mail:</label>
        			<input type="email" name="email" />
        			@error("email")
        				<div class="alert alert-danger">{{ $message }}</div>
					@enderror
        		</fieldset>
        		<fieldset>
        			<label for="message">Message:</label>
        			<textarea name="message"></textarea>
        			@error("message")
        				<div class="alert alert-danger">{{ $message }}</div>
					@enderror
        		</fieldset>
        		<input type="submit" value="Send" />
        	</form>
        </div>
@include("footer")
