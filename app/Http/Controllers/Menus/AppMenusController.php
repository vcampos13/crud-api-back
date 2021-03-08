<?php

namespace App\Http\Controllers\Menus;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menus\AppMenusRequest;
use App\Http\Resources\Menus\AppMenusCollection;
use App\Http\Resources\Menus\AppMenusResource;
use App\Models\Menus\AppMenus;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AppMenusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $menus = AppMenus::orderBy('title','ASC')->get();

        return AppMenusCollection::collection($menus);
    }

    /**
     * @param AppMenusRequest $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function store(AppMenusRequest $request)
    {
        $appMenus = new AppMenus;
        $appMenus->color            = $request->color;
        $appMenus->icon             = $request->icon;
        $appMenus->title            = $request->title;
        $appMenus->destination      = $request->destination;
        $appMenus->app_menus_id     = $request->app_menus_id;
        $appMenus->save();

        return response([
            'data' => new AppMenusResource($appMenus)
        ], Response::HTTP_CREATED);
    }

    /**
     * @param AppMenus $appMenus
     * @return AppMenusResource
     */
    public function show(AppMenus $appMenus)
    {
        return new AppMenusResource($appMenus);
    }

    /**
     * @param Request $request
     * @param AppMenus $appMenus
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function update(Request $request, AppMenus $appMenus)
    {
        $appMenus->update($request->all());

        return response([
            'data' => new AppMenusResource($appMenus)
        ], Response::HTTP_CREATED);
    }

    /**
     * @param AppMenus $appMenus
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function destroy(AppMenus $appMenus)
    {
        try {

            $appMenus->delete();
            return response(null,Response::HTTP_NO_CONTENT);

        } catch(\Illuminate\Database\QueryException $ex) {
            if($ex->getCode() === '23000') {
                return response()->json([
                    'data'          => [],
                    'status'        => '500',
                    'statusText'    => 'Error',
                    'message' => 'Menu "'.$appMenus->title.'" cannot be deleted, because there is a '.$appMenus->children->count().' children(s) which has linked to this parent!'
                ],500);
            }
            return response()->json([
                'data'          => [],
                'status'        => '500',
                'statusText'    => 'Error',
                'message' => 'Unknown error!'
            ],500);
        }
    }
}
