<div class="question-container">
	<div class="container">
		<div class="question-form">
			<?php
				$currentAction = $this->params['action'];
					if($currentAction == 'add'){
						echo $this->Html->link(
							$this->Html->image('logo3.png',
								array(
									'alt'=>'KosenClub logo',
									'class' => 'login-logo'
									)
							),
							array(
								'controller'=>'users',
								'action'=>'login'
							),
							array('escape' => false)
												);
					}
				echo $this->Form->create('Question');
			?>
			<?php
				if($sent){
					echo "<legend></legend><div class='spacer-small'></div><h4 class='text-center'>";
					echo $this->Session->flash();
					echo "</h4><br>";
					echo $this->Html->link(
						"Буцах", 
						array(
							'controller' => 'users',
							'action'=> 'login', 
						), 
						array( 
							'class' => 'btn btn-primary btn-block question-btn'
						)
					);
					}else{
			?>
			<legend>
				<?php 
				echo __('Бидэнтэй санал хүсэлтээ хуваалцах.'); 
				?>
			</legend>
			<p>
				<b>"Косэн Клуб"</b> нь Японы засгийн газрын шугамаар, Японы технологийн коллежиудад суралцаж буй оюутан болон суралцсан төгсөгчдийн груп болно. Бид бүгд “Коосэн”-ийнхан , “Инженерүүд” гэсэн холбоогоо үндэслэн , өөрсдийн ашиг сонирхолыг илэрхийлэн, бие биенээ тусалж дэмжиж цаашлаад Монгол Японыг холбосон гүүр үүсгэн ажиллах зорилготой юм. Тус клуб нь сайн дурын хэт албархаг бус, ашгийн бус байгууллага байх болно.
			</p>
			<?php
					// echo $this->Html->image("test/3.jpg", array('class'=>'img-responsive'));
			?>
			<br>
			<legend></legend>
			<?php
				//echo var_dump($this->request);
				echo $this->Form->input('name', array(
				'label' => 'Нэр',
				'class' => 'form-control',
				'type' => 'text'
				));
				echo $this->Form->input('email', array(
				'label' => 'Имэйл',
				'type' => 'email',
				'class' => 'form-control'
				));
				echo $this->Form->input('text', array(
				'label' => 'Агуулга',
				'type' => 'textarea',
				'class' => 'form-control'
				));
				echo $this->Form->input('ip_address', array('type'=>'hidden', 'value'=>$this->request->clientIp()));
				echo $this->Form->button('Илгээх',array(
				'class' => 'btn btn-primary btn-block question-btn'));
			?>
			<?php
			echo $this->Form->end(); ?>
			<?php
			}
			?>
			<div class="spacer">
				
			</div>
		</div>
	</div>
</div>