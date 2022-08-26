<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewMarkahToKriteriaGpssJalans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kriteria_gpss_jalans', function (Blueprint $table) {
            $table->integer('RwCommonCement')->nullable();
            $table->integer('RwCommonFormwork')->nullable();
            $table->integer('RwCommonSteel')->nullable();
            $table->integer('RwCommonPiles')->nullable();
            $table->integer('RwCommonSteelBar')->nullable();
            $table->integer('RwCommonSilicone')->nullable();
            $table->integer('RwSlopeGeotextile')->nullable();
            $table->integer('RwSlopeGeogrid')->nullable();
            $table->integer('RwSlopePrefabricated')->nullable();
            $table->integer('RwSlopeBlanket')->nullable();
            $table->integer('RwSlopeFibroMat')->nullable();
            $table->integer('RwDrainagePrecast')->nullable();
            $table->integer('RwDrainagePipes')->nullable();
            $table->integer('RwDrainageDrains')->nullable();
            $table->integer('RwDrainageBricks')->nullable();
            $table->integer('RwDrainagePrecastDrain')->nullable();
            $table->integer('RwDrainageGabionCage')->nullable();
            $table->integer('RwDrainageGrating')->nullable();
            $table->integer('RwDrainageWaterStop')->nullable();
            $table->integer('RwPavementsPrime')->nullable();
            $table->integer('RwPavementsTack')->nullable();
            $table->integer('RwPavementsBitumen')->nullable();
            $table->integer('RwPavementsAdditives')->nullable();
            $table->integer('RwPavementsAggregate')->nullable();
            $table->integer('RwPavementsCement')->nullable();
            $table->integer('RwPavementsBar')->nullable();
            $table->integer('RwPavementsWire')->nullable();
            $table->integer('RwPavementsPaving')->nullable();
            $table->integer('RwPavementsSoil')->nullable();
            $table->integer('RwRoadGuardrails')->nullable();
            $table->integer('RwRoadRailings')->nullable();
            $table->integer('RwRoadPrecast')->nullable();
            $table->integer('RwRoadWire')->nullable();
            $table->integer('RwRoadThermoplastic')->nullable();
            $table->integer('RwRoadPaint')->nullable();
            $table->integer('RwRoadAntiGlare')->nullable();
            $table->integer('RwRoadSoundBarrier')->nullable();
            $table->integer('RwRoadPaving')->nullable();
            $table->integer('RwRoadStud')->nullable();
            $table->integer('RwRoadChevron')->nullable();
            $table->integer('RwRoadPost')->nullable();
            $table->integer('RwRoadImpact')->nullable();
            $table->integer('RwRoadSignages')->nullable();
            $table->integer('RwRoadAmber')->nullable();
            $table->integer('RwRoadTraffic')->nullable();
            $table->integer('RwRoadStreet')->nullable();
            $table->integer('STwBridgeAbutment')->nullable();
            $table->integer('STwStructureBridgePier')->nullable();
            $table->integer('STwStructureBridgeBearing')->nullable();
            $table->integer('STwStructureBridgeDecking')->nullable();
            $table->integer('STwStructureBridgeExpansion')->nullable();
            $table->integer('STwStructureBridgeParapet')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kriteria_gpss_jalans', function (Blueprint $table) {
            $table->dropColumn('RwCommonCement');
            $table->dropColumn('RwCommonFormwork');
            $table->dropColumn('RwCommonSteel');
            $table->dropColumn('RwCommonPiles');
            $table->dropColumn('RwCommonSteelBar');
            $table->dropColumn('RwCommonSilicone');
            $table->dropColumn('RwSlopeGeotextile');
            $table->dropColumn('RwSlopeGeogrid');
            $table->dropColumn('RwSlopePrefabricated');
            $table->dropColumn('RwSlopeBlanket');
            $table->dropColumn('RwSlopeFibroMat');
            $table->dropColumn('RwDrainagePrecast');
            $table->dropColumn('RwDrainagePipes');
            $table->dropColumn('RwDrainageDrains');
            $table->dropColumn('RwDrainageBricks');
            $table->dropColumn('RwDrainagePrecastDrain');
            $table->dropColumn('RwDrainageGabionCage');
            $table->dropColumn('RwDrainageGrating');
            $table->dropColumn('RwDrainageWaterStop');
            $table->dropColumn('RwPavementsPrime');
            $table->dropColumn('RwPavementsTack');
            $table->dropColumn('RwPavementsBitumen');
            $table->dropColumn('RwPavementsAdditives');
            $table->dropColumn('RwPavementsAggregate');
            $table->dropColumn('RwPavementsCement');
            $table->dropColumn('RwPavementsBar');
            $table->dropColumn('RwPavementsWire');
            $table->dropColumn('RwPavementsPaving');
            $table->dropColumn('RwPavementsSoil');
            $table->dropColumn('RwRoadGuardrails');
            $table->dropColumn('RwRoadRailings');
            $table->dropColumn('RwRoadPrecast');
            $table->dropColumn('RwRoadWire');
            $table->dropColumn('RwRoadThermoplastic');
            $table->dropColumn('RwRoadPaint');
            $table->dropColumn('RwRoadAntiGlare');
            $table->dropColumn('RwRoadSoundBarrier');
            $table->dropColumn('RwRoadPaving');
            $table->dropColumn('RwRoadStud');
            $table->dropColumn('RwRoadChevron');
            $table->dropColumn('RwRoadPost');
            $table->dropColumn('RwRoadImpact');
            $table->dropColumn('RwRoadSignages');
            $table->dropColumn('RwRoadAmber');
            $table->dropColumn('RwRoadTraffic');
            $table->dropColumn('RwRoadStreet');
            $table->dropColumn('STwBridgeAbutment');
            $table->dropColumn('STwStructureBridgePier');
            $table->dropColumn('STwStructureBridgeBearing');
            $table->dropColumn('STwStructureBridgeDecking');
            $table->dropColumn('STwStructureBridgeExpansion');
            $table->dropColumn('STwStructureBridgeParapet');
        });
    }
}
