<?php


use App\Http\Controllers\AbstractFabric\PageController as AbstractFabric;
use App\Http\Controllers\AbstractMethod\PageController as AbstractMethod;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PropertyContainer\PageController as PropertyContainer;
use App\Http\Controllers\Delegation\PageController as Delegation;
use App\Http\Controllers\EventChanel\PageController as EventChanel;
use App\Http\Controllers\SimpleFabric\PageController as SimpleFabric;
use App\Http\Controllers\StaticFabric\PageController as StaticFabric;
use App\Http\Controllers\Singleton\PageController as Singleton;
use App\Http\Controllers\Multiton\PageController as Multiton;
use App\Http\Controllers\Builder\PageController as Builder;
use App\Http\Controllers\LazyLoad\PageController as LazyLoad;
use App\Http\Controllers\Prototype\PageController as Prototype;
use App\Http\Controllers\Strategy\PageController as Strategy;
use App\Http\Controllers\Adapter\PageController as Adapter;
use App\Http\Controllers\Facade\PageController as Facade;
use App\Http\Controllers\Bridge\PageController as Bridge;
use App\Http\Controllers\Composite\PageController as Composite;
use App\Http\Controllers\Decorator\PageController as Decorator;
use App\Http\Controllers\Manager\PageController as Manager;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'start']);
Route::get('property-container', [PropertyContainer::class, 'start'])->name('propertyContainer');
Route::get('delegation', [Delegation::class, 'start'])->name('delegation');
Route::get('event-chanel', [EventChanel::class, 'start'])->name('eventChanel');
Route::get('abstract-fabric', [AbstractFabric::class, 'start'])->name('abstractFabric');
Route::get('abstract-method', [AbstractMethod::class, 'start'])->name('abstractMethod');
Route::get('simple-fabric', [SimpleFabric::class, 'start'])->name('simpleFabric');
Route::get('static-fabric', [StaticFabric::class, 'start'])->name('staticFabric');
Route::get('singleton', [Singleton::class, 'start'])->name('singleton');
Route::get('multiton', [Multiton::class, 'start'])->name('multiton');
Route::get('builder', [Builder::class, 'start'])->name('builder');
Route::get('lazy-load', [LazyLoad::class, 'start'])->name('lazyLoad');
Route::get('prototype', [Prototype::class, 'start'])->name('prototype');
Route::get('strategy', [Strategy::class, 'start'])->name('strategy');
Route::get('adapter', [Adapter::class, 'start'])->name('adapter');
Route::get('facade', [Facade::class, 'start'])->name('facade');
Route::get('bridge', [Bridge::class, 'start'])->name('bridge');
Route::get('composite', [Composite::class, 'start'])->name('composite');
Route::get('decorator', [Decorator::class, 'start'])->name('decorator');
Route::get('manager', [Manager::class, 'start'])->name('manager');
