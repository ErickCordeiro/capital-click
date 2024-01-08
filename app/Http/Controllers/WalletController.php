<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Services\WalletService;
use Illuminate\Http\Request;

class WalletController extends Controller
{

    public function __construct(
        protected WalletService $walletService
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $wallets = $this->walletService->getAll($request->filter ?? '');
        return UserResource::collection($wallets);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
