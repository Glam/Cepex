            </div>
            <!-- /Content -->

            <?php get_sidebar(); ?>

            </div>
            <!-- /Container -->

            <div class="footer">
            
            
            
                
            <p class="credits ir"><a href="http://www.uexternado.edu.co">Universidad Externado de Colombia</a></p>
            
            <div class="copyright">            
            <?php $wptuts_option = wptuts_get_global_options(); ?>	
            <?php echo $wptuts_option['wptuts_txtarea_input']; ?>
            </div>
            
            
            </div>
        </div>
        <!-- Page generated: <?php timer_stop(1); ?> s, <?php echo get_num_queries(); ?> queries -->
        <?php wp_footer(); ?>

        <?php echo (get_option('ga')) ? get_option('ga') : '' ?>

	</body>
</html>