<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('machines', function (Blueprint $table) {
            $table->text('Compañia');
            $table->text('Marca_maquina');
            $table->text('Diametro_rodillo');
            $table->text('Largo_rodillo');
            $table->text('NMPH_curvo');
            $table->text('NMPH_recto');
            $table->text('DMPH_curvo');
            $table->text('DMPH_recto');
            $table->text('Centro_maquina');
            $table->text('Plecascs_corte_curvo');
            $table->text('Plecascs_corte_recto');
            $table->text('Plecascs_corte_fig');
            $table->text('Plecascs_score_curvo');
            $table->text('Plecascs_score_recto');
            $table->text('Plecascs_punteado_curvo');
            $table->text('Plecascs_punteado_recto');
            $table->text('Plecascd_corte_curvo');
            $table->text('Plecascd_corte_recto');
            $table->text('Plecascd_score_curvo');
            $table->text('Plecascd_score_recto');
            $table->text('Plecascd_punteado_curvo');
            $table->text('Plecascd_punteado_recto');
            $table->text('Vista_plano');
            $table->text('Velocidad_troquelado');
            $table->text('Ceja_lado');
            $table->text('Espesor_madera');
            $table->text('Factor_reduccion');
            $table->text('Rango_puentes_madera');
            $table->text('Rango_puentes_pleca');
            $table->text('Lado_impresion_troquela');
            $table->text('Dimension_max_troquelar');
            $table->text('Dimension_min_troquelar');
            $table->text('Tamaño_desperdicios_trim');
            $table->text('Tamaño_separacion_desperdicios');
            $table->text('Tipo_hule_trim_curvo');
            $table->text('Tipo_hule_trim_recto');
            $table->text('Tipo_hule_cuerpo_caja');
            $table->text('Tipo_hule_punteados');
            $table->text('Tipo_hule_scores_favor_flauta');
            $table->text('Tipo_hule_despuntes_cacahuates');
            $table->text('Tipo_hule_figuras');
            $table->text('Tipo_hules_desperdicio_5x5');
            $table->text('Observaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('machines', function (Blueprint $table) {
            $table->dropColumn('Compañia');
            $table->dropColumn('Marca_maquina');
            $table->dropColumn('Diametro_rodillo');
            $table->dropColumn('Largo_rodillo');
            $table->dropColumn('NMPH_curvo');
            $table->dropColumn('NMPH_recto');
            $table->dropColumn('DMPH_curvo');
            $table->dropColumn('DMPH_recto');
            $table->dropColumn('Centro_maquina');
            $table->dropColumn('Plecascs_corte_curvo');
            $table->dropColumn('Plecascs_corte_recto');
            $table->dropColumn('Plecascs_corte_fig');
            $table->dropColumn('Plecascs_score_curvo');
            $table->dropColumn('Plecascs_score_recto');
            $table->dropColumn('Plecascs_punteado_curvo');
            $table->dropColumn('Plecascs_punteado_recto');
            $table->dropColumn('Plecascd_corte_curvo');
            $table->dropColumn('Plecascd_corte_recto');
            $table->dropColumn('Plecascd_score_curvo');
            $table->dropColumn('Plecascd_score_recto');
            $table->dropColumn('Plecascd_punteado_curvo');
            $table->dropColumn('Plecascd_punteado_recto');
            $table->dropColumn('Vista_plano');
            $table->dropColumn('Velocidad_troquelado');
            $table->dropColumn('Ceja_lado');
            $table->dropColumn('Espesor_madera');
            $table->dropColumn('Factor_reduccion');
            $table->dropColumn('Rango_puentes_madera');
            $table->dropColumn('Rango_puentes_pleca');
            $table->dropColumn('Lado_impresion_troquela');
            $table->dropColumn('Dimension_max_troquelar');
            $table->dropColumn('Dimension_min_troquelar');
            $table->dropColumn('Tamaño_desperdicios_trim');
            $table->dropColumn('Tamaño_separacion_desperdicios');
            $table->dropColumn('Tipo_hule_trim_curvo');
            $table->dropColumn('Tipo_hule_trim_recto');
            $table->dropColumn('Tipo_hule_cuerpo_caja');
            $table->dropColumn('Tipo_hule_punteados');
            $table->dropColumn('Tipo_hule_scores_favor_flauta');
            $table->dropColumn('Tipo_hule_despuntes_cacahuates');
            $table->dropColumn('Tipo_hule_figuras');
            $table->dropColumn('Tipo_hules_desperdicio_5x5');
            $table->dropColumn('Observaciones');
        });
    }
};
