<?php
/**
 * Componente text
 */

class indicador extends base_component implements components_interface {

	public function make_indicador() : string {
		$html = '';

		ob_start();
		?>
            <!-- Media -->
            <div class="media <?=$this->cfg( 'contenido', 'font_color' )?>">

                <i class="mdi mdi-<?=$this->cfg( 'contenido', 'icon' )?> mdi__big mr-6 align-self-center"></i>

                <!-- Media Body -->
                <div class="media-body ">
                	<?php
                	$aux = $this -> _ITExt -> query($this->cfg( 'contenido', 'query' ))->fetchAll();
                	?>
                    <div class="display-3 font-weight-600 mb-1 init-counter"><?=$aux[0]['value']?></div>
                    <span class="d-block"><?=$this->cfg( 'contenido', 'info_text' )?></span>
                </div>
                <!-- /media body -->

            </div>
            <!-- /media -->
		<?php

		$html = ob_get_contents();
		ob_end_clean();

		return $html;
	}

	public function gen_content( ) : string {		
		return $this -> make_indicador();
	}
}