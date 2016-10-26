<?php echo PHP_EOL; ?>
		</main>

<!-- START FOOTER -->
		<footer>
			<span id="end"></span>
		</footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url('jquery/jquery.min.js'); ?>"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
		<?php
		if (isset($incluir_rodape)) :
			foreach ($incluir_rodape as $i) : echo $i.PHP_EOL; endforeach;
		else :
			echo PHP_EOL;
		endif;
		?>
	</body>
</html>
