<span>

                      <?php

                      $content = get_post_field( 'post_content', $post->ID );
                      $word_count = str_word_count( strip_tags( $content ) );
                      $readingtime = ceil($word_count / 200);
                      if ($readingtime == 1) {
                          $timer = " min";
                      } else {
                          $timer = " min";
                      }
                      $totalreadingtime = $readingtime . $timer;
                      echo $totalreadingtime .'';
                      echo "<span> read </span>";
                      ?>
                  </span>
