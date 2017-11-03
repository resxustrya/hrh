<html>
<body>
{{ Captcha::check('123','123') }}
    <form method="POST" action="{{ asset('/testing') }}">
        <img src="{{ Captcha::img() }}" alt="Captcha Image">
        <input type="text" name="captcha">
        <button type="submit" name="check">Submit</button>
    </form>
</body>
</html>