<div class="login-form">

    <div class="container">
<div class="table-responsive">
        <table id="table" class="table table-bordered table-condensed table-striped"> 
            <thead>
                <tr>
                    <th colspan="6">Исходные данные</th>
                </tr>
                <tr>  
                    <th>№</th>    
                    <?php foreach ($zapros_predpriyatiya as $k): ?>
                            <th><?= $k['name'] ?></th> 
                    <?php endforeach;  ?>
                    <th>Предложение</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php /* Наименование сырья */ ?>
                        <?php foreach ($zapros_serie as $k): ?>
                            <?= $k['name'] ?> <br> <hr> 
                        <?php endforeach;  ?>
                        Спрос
                    </td>
                    <td><?php /* Предприятие 1 */ ?>
                        <?php foreach ($zapros_rashod as $k): ?>
                            <?php if($k['id_predpriyatiya'] === '1'): ?>
                                  <?= $y1[] = $k['cena'] ?> <br> <hr> 
                            <?php endif; ?>
                        <?php endforeach;  ?>
                        <?php /* Спрос предприятие 1 */ ?>
                        <?php foreach ($zapros_predpriyatiya as $k): ?>
                            <?php if($k['id_predpriyatiya'] === '1'): ?>
                                <?= $potrebnost[] = $k['potrebnosti'] ?> 
                            <?php endif; ?>
                        <?php endforeach;  ?>  
                    </td>
                    <td><?php /* Предприятие 2 */ ?>
                        <?php foreach ($zapros_rashod as $k): ?>
                            <?php if($k['id_predpriyatiya'] === '2'): ?>
                                  <?= $y2[] = $k['cena'] ?> <br> <hr> 
                            <?php endif; ?>
                        <?php endforeach;  ?>
                        <?php /* Спрос предприятие 2 */ ?>
                        <?php foreach ($zapros_predpriyatiya as $k): ?>
                            <?php if($k['id_predpriyatiya'] === '2'): ?>
                                <?= $potrebnost[] = $k['potrebnosti'] ?> 
                            <?php endif; ?>
                        <?php endforeach;  ?>  
                    </td>
                    <td><?php /* Предприятие 3 */ ?>
                        <?php foreach ($zapros_rashod as $k): ?>
                            <?php if($k['id_predpriyatiya'] === '3'): ?>
                                  <?= $y3[] = $k['cena'] ?> <br> <hr> 
                            <?php endif; ?>
                        <?php endforeach;  ?>
                        <?php /* Спрос предприятие 3 */ ?>
                        <?php foreach ($zapros_predpriyatiya as $k): ?>
                            <?php if($k['id_predpriyatiya'] === '3'): ?>
                                <?= $potrebnost[] = $k['potrebnosti'] ?> 
                            <?php endif; ?>
                        <?php endforeach;  ?>  
                    </td>
                    <td><?php /* Предприятие 4 */ ?>
                        <?php foreach ($zapros_rashod as $k): ?>
                            <?php if($k['id_predpriyatiya'] === '4'): ?>
                                  <?= $y4[] = $k['cena'] ?> <br> <hr> 
                            <?php endif; ?>
                            <?= $k['potrebnosti'] ?>
                        <?php endforeach;  ?> 
                        <?php /* Спрос предприятие 4 */ ?>
                        <?php foreach ($zapros_predpriyatiya as $k): ?>
                            <?php if($k['id_predpriyatiya'] === '4'): ?>
                                <?= $potrebnost[] = $k['potrebnosti'] ?> 
                            <?php endif; ?>
                        <?php endforeach;  ?> 
                    </td>
                    <td><?php /* Предложение */ ?>
                        <?php foreach ($zapros_sklad as $k): ?>
                                <?= $predlogenie[] = $k['kolvo'] ?> <br> <hr> 
                        <?php endforeach;  ?> 
                    </td>
                </tr>
            </tbody>
        </table>
    </div>   
        <?php $start = microtime(true); ?> 
        <!-- Метод «северо-западного» угла -->
        <table id="table" class="table table-bordered table-condensed table-striped"> 
            <thead>
                <tr>
                    <th colspan="4">Метод «северо-западного» угла</th>
                </tr>
                <tr>
                    <td colspan="4">Начальный план перевозок имеет вид:</td>
                </tr>
            </thead>
            <tbody>        
                <tr>
                    <td>
                        <?= 'x<sub>11</sub> = ' . $x1[] = min($potrebnost[0], $predlogenie[0]) /* 120 */ ?>
                    </td>
                    <?php if ($x1[0] < $predlogenie[0]): ?>
                        <td><?= 'x<sub>12</sub> = ' . $x1[] = min($predlogenie[0] - $potrebnost[0], $potrebnost[1]) /* 40 */?></td>
                        <?php if (array_sum($x1) == $predlogenie[0]): ?>
                            <?php for ($i=1; $i<=count($zapros_predpriyatiya)-2; $i++): ?>
                            <td><?= $x1[] = 0 ?></td>
                        <?php endfor; ?>
                        <?php endif; ?>
                    <?php else: ?>    
                        <?php for ($i=1; $i<=count($zapros_predpriyatiya)-1; $i++): ?>
                            <td><?= $x1[] = 0 ?></td>
                        <?php endfor; ?>
                    <?php endif ?>
                </tr>

                <tr>
                   <?php if($x1[0] == $potrebnost[0]): ?>
                        <td><?= $x2[] = 0 ?></td>
                        <td><?= 'x<sub>22</sub> = ' . $x2[] = min($predlogenie[1], $potrebnost[1] - $x1[1]) /* 10 */?></td>
                            <?php if ($x2[1] < $predlogenie[1] ): ?>
                                <td><?= 'x<sub>23</sub> = ' . $x2[] = min($predlogenie[1] - $x2[1], $potrebnost[2]) /* 130 */?></td>
                                <?php if (array_sum($x2) == $predlogenie[1]): ?>
                                    <?php for ($i=1; $i<=count($zapros_predpriyatiya)-count($x2); $i++): ?>
                                    <td><?= $x1[] = 0 ?></td>
                                    <?php endfor ?>
                                <?php endif ?>    
                            <?php endif ?>
                   <?php endif; ?> 
                </tr>

                <tr>
                    <?php if($x1[0]+$x2[0] == $potrebnost[0]): ?>
                        <td><?= $x3[] = 0 ?></td>
                    <?php endif; ?> 
                    <?php if($x1[1]+$x2[1] == $potrebnost[1]): ?>
                        <td><?= $x3[] = 0 ?></td>
                    <?php endif; ?> 

                    <td><?= 'x<sub>33</sub> = ' . $x3[] = min($predlogenie[2], $potrebnost[2] - $x2[2]) /* 60 */?></td>
                    <?php if ($x3[2] < $predlogenie[2]): ?>
                        <td><?= 'x<sub>34</sub> = ' . $x3[] = min($predlogenie[2] - $x3[2], $potrebnost[3]) /* 110 */?></td>
                    <?php endif ?>
                </tr>

                <tr>
                    <td>Стоимость перевозок по этому плану составляет</td>
                    <td>
                        <?= $x1[0]*$y1[0] + $x1[1]*$y2[0] + $x1[2]*$y3[0] + $x1[3]*$y4[0] + 
                            $x2[0]*$y1[1] + $x2[1]*$y2[1] + $x2[2]*$y3[1] + $x2[3]*$y4[1] + 
                            $x3[0]*$y1[2] + $x3[1]*$y2[2] + $x3[2]*$y3[2] + $x3[3]*$y4[2] 
                        ?>   
                    </td>
                    <td><?php echo 'Время выполнения метода: ' ?></td>
                    <td><?php echo number_format((microtime(true) - $start),7,'.', '') . ' сек.'; ?></td>
                </tr>
            </tbody>
        </table>
        <?php $start_min = microtime(true); ?>
        <!-- Метод минимального элемента -->
        <table id="table" class="table table-bordered table-condensed table-striped"> 
            <thead>
                <tr>
                    <th colspan="4">Метод минимального элемента</th>
                </tr>
                <tr>
                    <td colspan="4">План перевозок, полученный по методу минимального элемента имеет вид:</td>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $xx1[] = 0 ?></td>
                    <td><?= $xx1[] = 0 ?></td>
                    <td>
                        <?= 'x<sub>13</sub> = ' . $xx1[] = min($potrebnost[2], $predlogenie[0]) /* 160 */ ?>
                    </td>
                    <td><?= $xx1[] = 0 ?></td>    
                </tr>
                <tr>
                    <td>
                        <?= 'x<sub>21</sub> = ' . $xx2[] = min($potrebnost[0], $predlogenie[1]) /* 120 */ ?>
                    </td>
                    <td><?= $xx2[] = 0 ?></td> 
                    <td><?= $xx2[] = 0 ?></td> 
                    <td><?= 'x<sub>14</sub> = ' . $xx2[] = min($predlogenie[1] - $potrebnost[0], $potrebnost[3] - $xx3[3]) /* 20 */ ?></td>
                </tr>
                <tr>
                    <td><?= $xx3[] = 0 ?></td>
                    <td>
                        <?= 'x<sub>32</sub> = ' . $xx3[] = min($potrebnost[1], $predlogenie[2]) /* 50 */ ?>
                    </td>
                    <td>
                        <?= 'x<sub>33</sub> = ' . $xx3[] = min($potrebnost[2] - $xx3[1], $potrebnost[2] - $predlogenie[0]) /* 30 */ ?>
                    </td>
                    <td>
                        <?= 'x<sub>34</sub> = ' . $xx3[] = min($predlogenie[2] - $xx3[1] - $xx3[2], $potrebnost[3]) /* 90 */ ?>
                    </td>
                </tr>
                <tr>
                    <td >Стоимость перевозок по этому плану составляет</td>
                    <td>
                        <?= $xx1[0]*$y1[0] + $xx1[1]*$y2[0] + $xx1[2]*$y3[0] + $xx1[3]*$y4[0] + 
                            $xx2[0]*$y1[1] + $xx2[1]*$y2[1] + $xx2[2]*$y3[1] + $xx2[3]*$y4[1] + 
                            $xx3[0]*$y1[2] + $xx3[1]*$y2[2] + $xx3[2]*$y3[2] + $xx3[3]*$y4[2] 
                        ?>   
                    </td>
                    <td><?php echo 'Время выполнения метода: ' ?></td>
                    <td><?php echo number_format((microtime(true) - $start_min),7,'.', '') . ' сек.'; ?></td>    
                </tr>    
            </tbody>
        </table> 
    </div>\
</div>
