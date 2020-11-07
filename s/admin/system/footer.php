<?php if(!defined("APP")) die()?>
						<footer>
						  <a href="http://gempixel.com/doc/premium-url-shortener?utm_source=app-admin&amp;utm_medium=footer&amp;utm_campaign=documentation" target="_blank">Online Documentation</a> - Version <?php echo _VERSION ?> <a href="http://gempixel.com/update.php?token=<?php echo md5('shortener'); ?>&amp;current=<?php echo _VERSION; ?>" target="_blank">(Check for update)</a>
						  <div class="pull-right">
						  	2019 - <?php echo date("Y") ?> &copy; <a href="http://gempixel.com">HIMAFI UNAIR</a>. All Rights Reserved.
						  </div>
						</footer>
      		</div>
      	</div>
    	</div>    
    <?php Main::admin_enqueue(TRUE) ?>
    </body>
</html>