<?php

namespace App\Exceptions;

use Dotenv\Exception\ValidationException;
use Illuminate\Auth\AuthenticationException;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException as ValidationValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    protected function unauthenticated($request, AuthenticationException $exception)

    {

        // if ($request->expectsJson()) {

        //     /** return response()->json(['error' => 'Unauthenticated.'], 401); */

        //     	$response = ['status' => 'error','message' => 'You pass invalid token'];

        //     	return response()->json($response);

        // }

        $response = ['status' => false,
                     'message' => 'You pass invalid token'];

        return response()->json($response,401);

    }
    protected function invalidJson($request, ValidationValidationException $exception)
    {
        return response()->json([
            'code'    => $exception->status,
            'message' => $exception->getMessage(),
            'errors'  => $this->transformErrors($exception),

        ], $exception->status);
    }

// transform the error messages,
    private function transformErrors(ValidationValidationException $exception)
    {
        $errors = [];

        foreach ($exception->errors() as $field => $message) {
           $errors[] = [
               'field' => $field,
               'message' => $message[0],
           ];
        }

        return $errors;
    }
}
