@include("header")
    	<div class="center">
        	<form class="contact_form" action="/register" method="POST">
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
            		<label for="password">Password:</label>
            		<input type="password" name="password">
        		</fieldset>
            	<input type="submit" value="Register" />
            </form>
    	</div>
@include("footer")