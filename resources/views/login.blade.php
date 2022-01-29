@include("header")
    	<div class="center">
        	<form class="login_form" action="/login" method="POST">
            	@csrf
            	<fieldset>
            		<label for="email">E-mail:</label>
            		<input type="text" name="email" />
            		@error('email')
        				<div class="alert alert-danger">{{ $message }}</div>
    				@enderror
            	</fieldset>
            	<fieldset>
            		<label for="password">Password:</label>
            		<input type="password" name="password" />
            		@error("password")
            			<div class="alert alert-danger">{{ $message }}</div>
    				@enderror
            	</fieldset>
            	<input type="submit" value="Login" />
            </form>
    	</div>
@include("footer")