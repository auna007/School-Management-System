<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Auth;

class Handler extends ExceptionHandler
{
    

    protected function unauthenticated($request, AuthenticationException $exception)
    {
    if ($request->expectsJson()) {
    return response()->json(['error' => 'Unauthenticated.'], 401);
    }
    if ($request->is('applicant') || $request->is('applicant/*') || $exception instanceof \lluminate\Session\TokenMismatchException && $request->is('applicant/*')) {
    return redirect()->guest('/applicant/login');
    }
    if ($request->is('student') || $request->is('student/*')) {
    return redirect()->guest('/student/login');
    }
    if ($request->is('guardian') || $request->is('guardian/*')) {
    return redirect()->guest('/guardian/login');
    }
    if ($request->is('admin') || $request->is('admin/*') || $exception instanceof \lluminate\Session\TokenMismatchException && $request->is('admin/*')) {
     return redirect()->guest(route('admin.login_form'));
    }
   
    }

    
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
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
}
