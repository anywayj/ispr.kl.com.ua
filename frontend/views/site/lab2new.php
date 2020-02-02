<!-- Исходные данные -->
    <div class="table-responsive">
        <table id="table" class="table table-bordered table-condensed table-striped"> 
            <thead>
                <tr>
                    <th colspan="8">Исходные данные</th>
                </tr>
                <tr>
                	<th><?php echo 'Претенденты' ?></th>
                <?php foreach ($zapros_vakansia1 as $k): ?>
			        <th><?= $k['name'] ?></th>
			    <?php endforeach;  ?>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td>
            			<!-- Список претендентов -->
		            	<?php foreach ($zapros_pretendenti1 as $k): ?>
					        <?= $k['fio'] ?><br><hr>
					    <?php endforeach;  ?>
                        <?php echo('Максимальный элемент:') ?>
            		</td>
            		<td>
            			<!-- Оценки по 1 вакансии -->
            			<?php foreach ($zapros_ocenki1 as $k): ?>
            				<?php if($k['id_vakansia'] === 1): ?>
			        			<?= $stolbec1[] = $k['ocenki'] ?><br><hr>
			        		<?php endif ?>
			    		<?php endforeach;  ?>
                        <?php $stolbec1_max = max($stolbec1) ?>   
                        <?php foreach ($stolbec1 as $key => $value) {
                            if($value === $stolbec1_max) {
                                $stroka1max = $key;
                                $stroka1max+=1;
                            }
                        } ?> 
                        <?php echo('[' . $stolbec1_max . '], строка = [' . ($stroka1max) . ']'); ?>
            		</td>
                    <td>
                        <!-- Оценки по 2 вакансии -->
                        <?php foreach ($zapros_ocenki1 as $k): ?>
                            <?php if($k['id_vakansia'] === 2): ?>
                                <?= $stolbec2[] = $k['ocenki'] ?><br><hr>
                            <?php endif ?>
                        <?php endforeach;  ?>
                        <?php $stolbec2_max = max($stolbec2) ?>   
                        <?php foreach ($stolbec2 as $key => $value) {
                            if($value === $stolbec2_max) {
                                $stroka2max = $key;
                                $stroka2max+=1;
                            }
                        } ?> 
                        <?php echo('[' . $stolbec2_max . '], строка = [' . ($stroka2max) . ']'); ?>
                    </td>
                    <td>
                        <!-- Оценки по 3 вакансии -->
                        <?php foreach ($zapros_ocenki1 as $k): ?>
                            <?php if($k['id_vakansia'] === 3): ?>
                                <?= $stolbec3[] = $k['ocenki'] ?><br><hr>
                            <?php endif ?>
                        <?php endforeach;  ?>
                        <?php $stolbec3_max = max($stolbec3) ?>   
                        <?php foreach ($stolbec3 as $key => $value) {
                            if($value === $stolbec3_max) {
                                $stroka3max = $key;
                                $stroka3max+=1;
                            }
                        } ?> 
                        <?php echo('[' . $stolbec3_max . '], строка = [' . ($stroka3max) . ']'); ?>
                    </td>
                    <td>
                        <!-- Оценки по 4 вакансии -->
                        <?php foreach ($zapros_ocenki1 as $k): ?>
                            <?php if($k['id_vakansia'] === 4): ?>
                                <?= $stolbec4[] = $k['ocenki'] ?><br><hr>
                            <?php endif ?>
                        <?php endforeach;  ?>
                        <?php $stolbec4_max = max($stolbec4) ?>   
                        <?php foreach ($stolbec4 as $key => $value) {
                            if($value === $stolbec4_max) {
                                $stroka4max = $key;
                                $stroka4max+=1;
                            }
                        } ?> 
                        <?php echo('[' . $stolbec4_max . '], строка = [' . ($stroka4max) . ']'); ?>
                    </td>
                    <td>
                        <!-- Оценки по 5 вакансии -->
                        <?php foreach ($zapros_ocenki1 as $k): ?>
                            <?php if($k['id_vakansia'] === 5): ?>
                                <?= $stolbec5[] = $k['ocenki'] ?><br><hr>
                            <?php endif ?>
                        <?php endforeach;  ?>
                        <?php $stolbec5_max = max($stolbec5) ?> <?php /* максимальный элемент в столбце*/ ?>
                        <?php /* Определяем в какой строке находится максимальный элемент столбца */ ?>  
                        <?php foreach ($stolbec5 as $key => $value) {
                            if($value === $stolbec5_max) {
                                $stroka5max = $key;
                                $stroka5max+=1; /* +1 потому что цикл с нуля (для вывода) */
                            }
                        } ?> 
                        <?php echo('[' . $stolbec5_max . '], строка = [' . ($stroka5max) . ']'); ?>
                    </td>
                </tr>    
            </tbody>
        </table>
    </div>
    
    <div class="table-responsive">
        <table id="table" class="table table-bordered table-condensed table-striped"> 
            <thead>
                <tr>
                    <th colspan="9"><?php echo('Решение:') ?></th>
                </tr>
                <tr>
                    <th><?php echo 'Претенденты' ?></th>
                <?php foreach ($zapros_vakansia1 as $k): ?>
                    <th><?= $k['name'] ?></th>
                <?php endforeach;  ?>
                    <th>Вакансия 6</th>
                    <th>Вакансия 7</th>
                    <th>Ограничения</th>
                </tr>
            </thead>
            <tbody>
                <!-- Запишем Максимальные элементы столбцам в массив и для строк создам еще один -->
                    <?php $mass_stroka_max = array($stroka1max,$stroka2max,$stroka3max,$stroka4max,$stroka5max); ?>
                    <?php $mass_stolbec_max = array($stolbec1_max,$stolbec2_max,$stolbec3_max,$stolbec4_max,$stolbec5_max); ?>
                    
                    
                    <!--
                    Проверка количества максимальных элементов в массиве максимальных по столбцам 
                    -->
                    <!-- цикл 1 -->
                        <?php foreach ($mass_stolbec_max as $k => $v) {
                            if($v>$mass_stolbec_max[0]) {
                                $max_k_1 = $k;
                                $max_st_1 = $v;
                            }

                            $max_kk_1 = $max_k_1;
                            $maxkk_1 = $max_kk_1;
                            $max_kk_1+=1;

                               
                        } ?>

                        <?php unset($mass_stolbec_max[$max_k_1]); ?>  

                    <!-- цикл 2 -->
                        <?php foreach ($mass_stolbec_max as $k => $v) {
                            if($v>$mass_stolbec_max[0]) {
                                $max_k_2 = $k;
                                $max_st_2 = $v;
                            }

                            $max_kk_2 = $max_k_2;
                            $maxkk_2 = $max_kk_2;
                            $max_kk_2+=1;

                        } ?>

                        <?php unset($mass_stolbec_max[$max_k_2]); ?> 

                    <!-- цикл 3 -->
                        <?php foreach ($mass_stolbec_max as $k => $v) {
                            if($v>$mass_stolbec_max[0]) {
                                $max_k_3 = $k;
                                $max_st_3 = $v;
                            }

                            $max_kk_3 = $max_k_3;
                            $maxkk_3 = $max_kk_3;
                            $max_kk_3+=1;

                        } ?>

                        <?php unset($mass_stolbec_max[$max_k_3]); ?>
                    
                    <!-- в циклах 1,2,3 выбираются максимальные элементы столбцов (9) и получаем их ключи для сравнения их потом с ключами по строке -->

                    <!-- в строке 7 проверили есть ли еще другие элементы равные максимальному, если нет то вакансия отдается 7-му претенденту, в противном случае проверяется среди этих максимальных по строке какие у них максимальные по столбцу, приоритетность отдаем тому столбцу максимальный элемент которого меньше 
                    -->

                        <?php foreach ($mass_stroka_max as $key => $val) {
                                    if ($key === $maxkk_1) {
                                        $xx1[] = $val; /* строка 7 */
                                        $xx1_key[] = $key; /* ключ строки 7 */
                                        unset($mass_stroka_max[$maxkk_1]); /* удаление элемента из массива максимальных по строке */
                                    }

                                }  ?>

                        <?php foreach ($mass_stroka_max as $key => $val) {
                                    if ($key === $maxkk_2) {
                                        $xx2[] = $val; /* строка 6 */
                                        $xx2_key[] = $key; /* ключ строки 6 */
                                        unset($mass_stroka_max[$maxkk_2]); /* удаление элемента из массива максимальных по строке */
                                    }

                                    if ($key === $maxkk_3) {
                                        $xx3[] = $val; /* строка 4 */
                                        $xx3_key[] = $key; /* ключ строки 4 */
                                        unset($mass_stroka_max[$maxkk_3]); /* удаление элемента из массива максимальных по строке */
                                    }
                                    
                                }  ?>  
                        <?php foreach ($mass_stroka_max as $key => $val) {
                                        if($stolbec1_max > $stolbec4_max) {
                                            $xx4_key[] = $key; /* строка 3 , если 8>7 то вакансия 1 иначе вакансия 4*/
                                            unset($mass_stroka_max[$xx4_key[0]]);
                                        } else {
                                            $xx4_key[] = $key;
                                            unset($mass_stroka_max[$xx4_key[0]]);
                                        }

                                }  ?>

                            
                           <?php $new_max2 = max($stolbec4) ?>
                                <?php foreach ($stolbec4 as $key => $value) {
                                    if($new_max2 === $value) {
                                        $key_max2 = $key;
                                       }

                                } ?>
                                
                  <!-- Вывод данных-->   
                                 
              <tr>
                <td>1</td>
                <?php for ($i=0; $i < count($zapros_pretendenti1); $i++) { 
                    if($i === $stolb[0]) { 
                        echo ('<td class="warning">[1]</td>'); /* если массив не пуст и ключ совпадает с индексом то выводим 1 */
                    } else {
                        echo ('<td>0</td>'); /* остальную строку заполняем нулями */
                    }
                } ?>
                <td><?php echo('1') ?></td>
              </tr>
              <tr>
                <td>2</td>
                <?php for ($i=0; $i < count($zapros_pretendenti1); $i++) { 
                    if($i === $key_max2) { 
                        echo ('<td class="warning">[1]</td>'); /* если массив не пуст и ключ совпадает с индексом то выводим 1 */
                    } else {
                        echo ('<td>0</td>'); /* остальную строку заполняем нулями */
                    }
                } ?>
                <td><?php echo('1') ?></td>
              </tr>
              <tr>
                <td>3</td>
                <?php for ($i=0; $i < count($zapros_pretendenti1); $i++) { 
                    if($i === $xx4_key[0]) { 
                        echo ('<td class="warning">[1]</td>'); /* если массив не пуст и ключ совпадает с индексом то выводим 1 */
                    } else {
                        echo ('<td>0</td>'); /* остальную строку заполняем нулями */
                    }
                } ?>
                <td><?php echo('1') ?></td>
              </tr>
              <tr>
                <td>4</td>
                <?php for ($i=0; $i < count($zapros_pretendenti1); $i++) { 
                    if($xx3[0] != NULL and $i === $xx3_key[0] ) { 
                        echo ('<td class="warning">[1]</td>'); /* если массив не пуст и ключ совпадает с индексом то выводим 1 */
                    } else {
                        echo ('<td>0</td>'); /* остальную строку заполняем нулями */
                    }
                } ?>
                <td><?php echo('1') ?></td>
              </tr>
              <tr>
                <td>5</td>
                <?php for ($i=0; $i < count($zapros_pretendenti1); $i++) { 
                    if($i === $stolb[1]) { 
                        echo ('<td class="warning">[1]</td>'); /* если массив не пуст и ключ совпадает с индексом то выводим 1 */
                    } else {
                        echo ('<td>0</td>'); /* остальную строку заполняем нулями */
                    }
                } ?>
                <td><?php echo('1') ?></td>
              </tr>
              <tr>
                <td>6</td>
                <?php for ($i=0; $i < count($zapros_pretendenti1); $i++) { 
                    if($xx2[0] != NULL and $i === $xx2_key[0] ) { 
                        echo ('<td class="warning">[1]</td>'); /* если массив не пуст и ключ совпадает с индексом то выводим 1 */
                    } else {
                        echo ('<td>0</td>'); /* остальную строку заполняем нулями */
                    }
                } ?>
                <td><?php echo('1') ?></td>
              </tr>
              <tr>
                <td>7</td>
                <?php for ($i=0; $i < count($zapros_pretendenti1); $i++) { 
                    if($xx1[0] != NULL and $i === $xx1_key[0] ) { 
                        echo ('<td class="warning">[1]</td>'); /* если массив не пуст и ключ совпадает с индексом то выводим 1 */
                    } else {
                        echo ('<td>0</td>'); /* остальную строку заполняем нулями */
                    }
                } ?>
                <td><?php echo('1') ?></td>
              </tr>
              <?php $stolbec_max = array($stolbec1_max,$stolbec2_max,$stolbec3_max,$stolbec4_max,$stolbec5_max); ?>
              <tr>
                <th><?php echo('Ограничения') ?></th>
                   <?php for ($i=0; $i < count($zapros_pretendenti1); $i++) { 
                        echo ('<td>1</td>');

                   } ?>
                   <th><?= array_sum($stolbec_max) ?></th>
               </tr>   
               <tr>
                   <td colspan="9" class="success">
                    <?php echo('Определить, какого претендента и на какую вакансию следует принять,<br> 
                                причем так, чтобы сумма баллов отобранных претендентов оказалось максимальной.<br> 
                         <b>Целевая функция:</b> ' . $stolbec_max[0] .'+'. $stolbec_max[1] .'+'
                                                   . $stolbec_max[2] .'+'. $stolbec_max[3] .'+'
                                                   . $stolbec_max[4] . ' = <b>'. array_sum($stolbec_max) .'</b>'
                    ) ?>
                                                       
                   </td>

               </tr> 

            </tbody>
        </table>
    </div>
    </div>
</div>