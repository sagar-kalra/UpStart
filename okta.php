<html>
<script
src="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.1.0/js/okta-sign-in.min.js"
type="text/javascript"></script>
<link
href="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.1.0/css/okta-sign-in.min.css"
type="text/css"
rel="stylesheet"/>
<link
href="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.1.0/css/okta-theme.css"
type="text/css"
rel="stylesheet"/>
<body>
<script type="text/javascript">
<div id="okta-login-container">

    var oktaSignIn = new OktaSignIn({
        baseUrl: "https://{yourOktaDomain}.com",
        clientId: "{clientId}",
        authParams: {
            issuer: "https://{yourOktaDomain}.com/oauth2/default",
            responseType: 'token id_token',
            responseMode: 'query',
            scopes: ['openid', 'profile', 'email']
        }
    });

    // Render the widget to the CSS selector #okta-login-container
    oktaSignIn.renderEl(
        { el: '#okta-login-container' },
        function success(res) {
            if (res.status !== 'SUCCESS') {
                return;
            }
            // Store the tokens in the TokenManager in the order requested
            oktaSignIn.tokenManager.add('accessToken', res[0])
            oktaSignIn.tokenManager.add('idToken', res[1])
            
            return;
        },
        function error(err) {
            // The widget handles most types of errors: CONFIG_ERROR, OAUTH_ERROR, etc
            // Add any custom logic to handle uncaught exceptions
            console.log(err);
        }
    );
	
</script>
</div>
</body>
</html>