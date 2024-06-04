<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Routing\Exceptions\UrlGenerationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {

        $exceptions->render(function (UrlGenerationException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'URL generada incorrectamente.',
                    'data' => $e->getMessage(),
                    'error' => 'UrlGenerationException'
                ], 500);
            }
        });

        $exceptions->render(function (NotFoundHttpException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'URL no encontrada.',
                    'data' => null,
                    'error' => 'NotFoundHttpException'
                ], 404);
            }
        });

        $exceptions->render(function (ValidationException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Error de validacion.',
                    'data' => $e->errors(),
                    'error' => 'ValidationException'
                ], 500);
            }
        });

        $exceptions->render(function (ModelNotFoundException $e, Request $request) {
            if ($request->is('api/*')) {
                $modelo = class_basename($e->getModel());
                return response()->json([
                    'message' => 'Instancia: '. $modelo .' no encontrada.',
                    'data' => null,
                    'error' => 'ModelNotFoundException'
                ], 404);
            }
        });

        $exceptions->render(function (AuthenticationException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Usuario no autenticado',
                    'data' => null,
                    'error' => 'AuthenticationException'
                ], 401);
            }
        });

        $exceptions->render(function (AuthorizationException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'No posees permisos para esta accion',
                    'data' => null,
                    'error' => 'AuthorizationException'
                ], 403);
            }
        });

        $exceptions->render(function (MethodNotAllowedHttpException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'El método especificado en la peticion no es valido',
                    'data' => null,
                    'error' => 'AuthorizationException'
                ], 405);
            }
        });

        $exceptions->render(function (HttpException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => $e->getMessage(),
                    'data' => null,
                    'error' => 'HttpException'
                ], $e->getStatusCode());
            }
        });

        $exceptions->render(function (QueryException $e, Request $request) {
            if ($request->is('api/*')) {
                $codigo = $e->errorInfo[1];
                switch ($codigo) {
                    case 1451:
                        return $this->response()->json(['No se puede eliminar de forma permanente el recurso porque esta relacionado con algun otro', 'error' => 'QueryException', 'data' => null], 409);
                        break;
                    case 1045:
                        return $this->response()->json(['Credenciales incorrectas al conectarse a la BD', 'error' => 'QueryException', 'data' => null], 409); 
                        break;
                    case 1062:
                        return $this->response()->json(['El email ya se encuentra registrado', 'error' => 'QueryException', 'data' => null], 409);
                        break;
                    default:
                        return response()->json(['message' => 'Falla inesperada  ' . $e,'data' => null, 'error' => 'QueryException']);
                        break;
                }
                return response()->json([
                    'message' => $e->getMessage(),
                    'data' => null,
                    'error' => 'QueryException'
                ], 409);
            }
        });

    })->create();
