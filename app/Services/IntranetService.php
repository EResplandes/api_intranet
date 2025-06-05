<?php

namespace App\Services;
use App\Models\User;
use App\Models\Avisos;
use App\Models\Banners;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\UsuarioResource;
use App\Http\Resources\AvisoResource;

class IntranetService
{
    public function infomacoesIntranet()
    {
        DB::beginTransaction();

        try {
            // Levantamento de Aniversariantes do Mês
            $mesAtual = date('m');

            $aniversariantes = UsuarioResource::collection(User::where('mes', $mesAtual)->get());

            // Levantamento de Avisos Importantes
            $avisos = AvisoResource::collection(Avisos::where('ativo', 1)->get());

            // Levantamento de Banners Ativos
            $banners = Banners::where('ativo', 1)->get();

            return response()->json([
                'aniversariantes' => $aniversariantes,
                'avisos' => $avisos,
                'banners' => $banners
            ], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }
}