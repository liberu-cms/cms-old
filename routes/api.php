<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Author\Admin\Create as AuthorCreate;
use App\Http\Controllers\Author\Admin\Destroy as AuthorDestroy;
use App\Http\Controllers\Author\Admin\Edit as AuthorEdit;
use App\Http\Controllers\Author\Admin\Store as AuthorStore;
use App\Http\Controllers\Author\Admin\Update as AuthorUpdate;
use App\Http\Controllers\Author\Admin\Index as AuthorIndex;
use App\Http\Controllers\Author\Admin\Show as AuthorShow;
use App\Http\Controllers\ContentCategory\Admin\Store as ContentCategoryStore;
use App\Http\Controllers\ContentCategory\Admin\Index as ContentCategoryIndex;
use App\Http\Controllers\ContentCategory\Admin\Create as ContentCategoryCreate;
use App\Http\Controllers\ContentCategory\Admin\Destroy as ContentCategoryDestroy;
use App\Http\Controllers\ContentCategory\Admin\Edit as ContentCategoryEdit;
use App\Http\Controllers\ContentCategory\Admin\Show as ContentCategoryShow;
use App\Http\Controllers\ContentCategory\Admin\Update as ContentCategoryUpdate;
use App\Http\Controllers\Content\Admin\Create as ContentCreate;
use App\Http\Controllers\Content\Admin\Destroy as ContentDestroy;
use App\Http\Controllers\Content\Admin\Index as ContentIndex;
use App\Http\Controllers\Content\Admin\Edit as ContentEdit;
use App\Http\Controllers\Content\Admin\Show as ContentShow;
use App\Http\Controllers\Content\Admin\Store as ContentStore;
use App\Http\Controllers\Content\Admin\Update as ContentUpdate;
use App\Http\Controllers\Tag\Admin\Index as TagIndex;
use App\Http\Controllers\Tag\Admin\Create as TagCreate;
use App\Http\Controllers\Tag\Admin\Destroy as TagDestroy;
use App\Http\Controllers\Tag\Admin\Store as TagStore;
use App\Http\Controllers\Tag\Admin\Update as TagUpdate;
use App\Http\Controllers\Tag\Admin\Show as TagShow;
use App\Http\Controllers\Tag\Admin\Edit as TagEdit;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::namespace('Auth')
    ->middleware('api')
    ->group(function () {
        Route::middleware('guest')->group(function () {
            Route::get('login/{provider}', fn ($provider) => (new LoginController())->redirectToProvider($provider));
            Route::get('login/{provider}/callback', fn ($provider): JsonResponse => (new LoginController())->providerCallback($provider));
            Route::post('login', fn (Request $request) => (new LoginController())->login($request));
        });

        Route::middleware('auth')->group(function () {
            Route::post('logout', fn (Request $request) => (new LoginController())->logout($request));
        });
        Route::post('confirm_checkout', fn (Request $request) => (new LoginController())->confirmSubscription($request));

        Route::post('register', [RegisterController::class, 'create']);
        //  Route::get('get-subscription-plan', [RegisterController::class, 'getSubscriptionPlan']);
        // Route::post('verify', [RegisterController::class, 'verify_user']);
    });


Route::namespace('')
    ->group(function () {
        Route::prefix('contents')->as('contents.')->group(function () {
            Route::get('', ContentIndex::class)->name('index');
            Route::get('create', ContentCreate::class)->name('create');
            Route::post('', ContentStore::class)->name('store');
            Route::get('{content}/edit', ContentEdit::class)->name('edit');
            Route::patch('{content}', ContentUpdate::class)->name('update');
            Route::delete('{content}', ContentDestroy::class)->name('destroy');
            Route::get('{content}', ContentShow::class)->name('show');
        });
    });

Route::namespace('')
    ->group(function () {
        Route::prefix('authors')->as('authors.')->group(function () {
            Route::get('', AuthorIndex::class)->name('index');
            Route::get('create', AuthorCreate::class)->name('create');
            Route::post('', AuthorStore::class)->name('store');
            Route::get('{author}/edit', AuthorEdit::class)->name('edit');
            Route::patch('{author}', AuthorUpdate::class)->name('update');
            Route::delete('{author}', AuthorDestroy::class)->name('destroy');
            Route::get('{author}', AuthorShow::class)->name('show');
        });
    });

Route::namespace('')
    ->group(function () {
        Route::prefix('tags')->as('tags.')->group(function () {
            Route::get('', TagIndex::class)->name('index');
            Route::get('create', TagCreate::class)->name('create');
            Route::post('', TagStore::class)->name('store');
            Route::get('{tag}/edit', TagEdit::class)->name('edit');
            Route::patch('{tag}', TagUpdate::class)->name('update');
            Route::delete('{tag}', TagDestroy::class)->name('destroy');
            Route::get('{tag}', TagShow::class)->name('show');
        });
    });


Route::namespace('')
    ->group(function () {
        Route::prefix('content-categories')->as('content-categories.')->group(function () {
            Route::get('', ContentCategoryIndex::class)->name('index');
            Route::get('create', ContentCategoryCreate::class)->name('create');
            Route::post('', ContentCategoryStore::class)->name('store');
            Route::get('{content_category}/edit', ContentCategoryEdit::class)->name('edit');
            Route::patch('{content_category}', ContentCategoryUpdate::class)->name('update');
            Route::delete('{content_category}', ContentCategoryDestroy::class)->name('destroy');
            Route::get('{content_category}', ContentCategoryShow::class)->name('show');
        });
    });
