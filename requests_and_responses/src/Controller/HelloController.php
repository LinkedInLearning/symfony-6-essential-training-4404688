<?php
declare( strict_types=1 );

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController {

	public function world(): Response {
		return new Response(
			'<html><body>Hello World</body></html>'
		);
	}

	public function name( string $name ): Response {
		return new Response(
			'<html>
			<body>Hello ' . $name . '</body>
			<br /><br />
			<pre>' . print_r( Request::createFromGlobals(), true ) . '</pre>
			</html>'
		);
	}

}
