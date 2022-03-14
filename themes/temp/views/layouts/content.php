<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

?>
< class="content-wrapper">
    <!-- <section class="content-header">
        <?php if (isset($this->blocks['content-header'])) { ?>
            <h1><?= $this->blocks['content-header'] ?></h1>
        <?php } else { ?>
            <h1>
                <?php
                if ($this->title !== null) {
                    echo \yii\helpers\Html::encode($this->title);
                } else {
                    echo \yii\helpers\Inflector::camel2words(
                        \yii\helpers\Inflector::id2camel($this->context->module->id)
                    );
                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                } ?>
            </h1>
        <?php } ?>

        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </section> -->
    <div class="app-content  my-3 my-md-5" style="min-height: 95vh; display: flex; flex-direction: column;">
		<div class="side-app">
    <!-- <section class="content"> -->
        <?//= Alert::widget() ?>
        <?= $content ?>
    <!-- </section> -->
        </div>
			<!--footer-->
			<footer class="footer" style="margin-top: auto;">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							<i> All rights reserved. © 2022 - <?= date('Y') ?> <a href="#" style="font-weight: bold; color:#007bff; font-family:Gill Sans">HONOR MEDICARE</a>. All rights reserved. </i><br>
							<!-- <i> The website & contents are designed, developed and maintained by Elivia M Kabigumila </i><br> -->
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
        </div>
	</div>
</div>       
<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>