<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ProArte\PlanoTrabalho\PlanoTrabalho;
use Database\Seeders\PontosCriticos\AnexoSeeder;
use Database\Seeders\PontosCriticos\ApresentacaoSeeder;
use Database\Seeders\PontosCriticos\ControlePluviometricoSeeder;
use Database\Seeders\PontosCriticos\ControleTecnologicoSeeder;
use Database\Seeders\PontosCriticos\PlanoTrabalhoSeeder;
use Database\Seeders\PontosCriticos\MapaSituacaoSeeder;
use Database\Seeders\PontosCriticos\MsEquipamentoSeeder;
use Database\Seeders\PontosCriticos\MsEquipeSeeder;
use Database\Seeders\PontosCriticos\MsMobilizacaoSeeder;
use Database\Seeders\PontosCriticos\MsOrdemServicoSeeder;
use Database\Seeders\PontosCriticos\OcorrenciaProjetoSeeder;
use Database\Seeders\PontosCriticos\OrdemServicosSeeder;
use Database\Seeders\PontosCriticos\RelatorioFotograficoSeeder;
use Database\Seeders\PontosCriticos\ResumoMobilizacaoSeeder;
use Database\Seeders\PontosCriticos\ServicosExecutadosSeeder;
use Database\Seeders\PontosCriticos\TermoEncerramentoSeeder;
use Database\Seeders\ProArte\LicencasAmbientaisSeeder;
use Database\Seeders\ProArte\NaoConformidadeSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            //PONTOS CRITICOS-------------------
           ApresentacaoSeeder::class,

           //mobilazão supervisora
           MsOrdemServicoSeeder::class,
           MsEquipamentoSeeder::class,
           MsEquipeSeeder::class,

           ResumoMobilizacaoSeeder::class,
           MapaSituacaoSeeder::class,
           ControlePluviometricoSeeder::class,
           ControleTecnologicoSeeder::class,
           OcorrenciaProjetoSeeder::class,
           ServicosExecutadosSeeder::class,
        //    PlanoTrabalhoSeeder::class,
           RelatorioFotograficoSeeder::class,
           TermoEncerramentoSeeder::class,
           AnexoSeeder::class,
            //------------------------------------

            //PROARTE
            // \Database\Seeders\ProArte\ApresentacaoSeeder::class,

            // //MOBILIZAÇÃO SUPERVISORA
            // \Database\Seeders\ProArte\MsMobilizacaoSeeder::class,
            // \Database\Seeders\ProArte\MsEquipamentoSeeder::class,
            // \Database\Seeders\ProArte\MsEquipeSeeder::class,

            // \Database\Seeders\ProArte\ResumoMobilizacaoSeeder::class,
            // \Database\Seeders\ProArte\PlanoTrabalhoSeeder::class,
            // \Database\Seeders\ProArte\MapaSituacaoSeeder::class,
            // \Database\Seeders\ProArte\OrdemServicosSeeder::class,
            // \Database\Seeders\ProArte\LicencasAmbientaisSeeder::class,
            // \Database\Seeders\ProArte\ServicosExecutadosSeeder::class,
            // \Database\Seeders\ProArte\RelatorioFotograficoSeeder::class,
            // \Database\Seeders\ProArte\NaoConformidadeSeeder::class,
            // \Database\Seeders\ProArte\AnexoSeeder::class,
            // \Database\Seeders\ProArte\TermoEncerramentoSeeder::class
        ]);
    }
}
