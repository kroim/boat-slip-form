<html>
<?php
if (!defined('PREPEND_PATH')) define('PREPEND_PATH', '');
include(PREPEND_PATH . "views/partials/head.php");
include(PREPEND_PATH . "views/partials/header.php");
?>
<style>
    #slip-table th, #slip-table td {
        text-align: center;
        font-size: 11px;
        padding: 0;
        height: 20px;
        width: 50px;
        vertical-align: inherit;
    }
    .slip-number {
        cursor: pointer;
    }
    .slip-number:hover {
        color: #c45620;
    }
    .slip-reserved {
        background: #9932cc;
    }
</style>
<body data-sa-theme="5">
<?php include(PREPEND_PATH . "views/partials/sidebar.php"); ?>
<section class="content">
    <div class="form-group">
        <h3 class="text-center" style="color: #b14f0d">Cornettas Marina - Not to Scale</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="slip-table">
                    <thead>
                    <tr>
                        <th></th><th style="width: 2%;"></th><th></th><th></th><th></th><th style="width: 2%;"></th><th></th><th></th><th></th>
                        <th style="width: 2%;"></th><th></th><th></th><th></th><th style="width: 2%;"></th><th></th><th></th><th></th>
                        <th style="width: 2%;"></th><th></th><th></th><th></th><th style="width: 2%;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id="line-4">
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td>
                    </tr>
                    <tr id="line-5">
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td class="<?php if (in_array('56', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">56</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('55', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">55</td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-6">
                        <td style="background: #4472c4"></td><td style="background: #4472c4"></td><td style="background: #4472c4"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('54', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">54</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('53', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">53</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('18', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">18</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('17', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">17</td><td></td>
                        <td class="<?php if (in_array('B1', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B1</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-7">
                        <td class="<?php if (in_array('JS25', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS25</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('B26', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS26</td><td></td>
                        <td class="<?php if (in_array('74', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">74</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('73', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">73</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('36', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">36</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('35', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">35</td><td></td>
                        <td></td><td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('15', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">15</td><td></td>
                        <td class="<?php if (in_array('B2', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B2</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-8">
                        <td class="<?php if (in_array('JS23', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS23</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS24', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS24</td><td></td>
                        <td class="<?php if (in_array('72', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">72</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('71', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">71</td><td></td>
                        <td class="<?php if (in_array('52', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">52</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('51', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">51</td><td></td>
                        <td class="<?php if (in_array('34', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">34</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('33', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">33</td><td></td>
                        <td class="<?php if (in_array('16', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">16</td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-9">
                        <td class="<?php if (in_array('JS21', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS21</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS22', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS22</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('50', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">50</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('49', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">49</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('13', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">13</td><td></td>
                        <td class="<?php if (in_array('B3', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B3</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-10">
                        <td class="<?php if (in_array('JS19', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS19</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS20', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS20</td>
                        <td></td>
                        <td class="<?php if (in_array('70', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">70</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('69', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">69</td>
                        <td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('32', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">32</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('31', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">31</td>
                        <td></td>
                        <td class="<?php if (in_array('14', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">14</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('11', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">11</td>
                        <td></td>
                        <td class="<?php if (in_array('B4', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B4</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-11">
                        <td class="<?php if (in_array('JS17', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS17</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS18', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS18</td>
                        <td></td>
                        <td class="<?php if (in_array('68', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">68</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('67', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">67</td>
                        <td></td>
                        <td class="<?php if (in_array('48', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">48</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('47', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">47</td>
                        <td></td>
                        <td class="<?php if (in_array('30', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">30</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('29', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">29</td>
                        <td></td>
                        <td class="<?php if (in_array('12', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">12</td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-12">
                        <td class="<?php if (in_array('JS15', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS15</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS16', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS16</td>
                        <td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('46', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">46</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('45', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">45</td>
                        <td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('9', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">9</td>
                        <td></td>
                        <td class="<?php if (in_array('B5', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B5</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-13">
                        <td class="<?php if (in_array('JS13', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS13</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS14', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS14</td>
                        <td></td>
                        <td class="<?php if (in_array('66', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">66</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('65', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">65</td>
                        <td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('28', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">28</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('27', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">27</td>
                        <td></td>
                        <td class="<?php if (in_array('10', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">10</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('7', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">7</td>
                        <td></td>
                        <td class="<?php if (in_array('B6', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B6</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-14">
                        <td class="<?php if (in_array('JS11', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS11</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS12', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS12</td>
                        <td></td>
                        <td class="<?php if (in_array('64', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">64</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('63', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">63</td>
                        <td></td>
                        <td class="<?php if (in_array('44', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">44</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('43', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">43</td>
                        <td></td>
                        <td class="<?php if (in_array('26', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">26</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('25', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">25</td>
                        <td></td>
                        <td class="<?php if (in_array('8', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">8</td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-15">
                        <td class="<?php if (in_array('JS9', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS9</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS10', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS10</td>
                        <td></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('42', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">42</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('41', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">41</td>
                        <td></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('5', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">5</td><td></td>
                        <td class="<?php if (in_array('B7', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B7</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-16">
                        <td class="<?php if (in_array('JS7', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS7</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS8', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS8</td><td></td>
                        <td class="<?php if (in_array('62', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">62</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('61', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">61</td><td></td>
                        <td style="background: #70ad47"></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('24', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">24</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('23', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">23</td><td></td>
                        <td class="<?php if (in_array('6', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">6</td>
                        <td style="background: #70ad47"></td><td></td><td></td>
                        <td class="<?php if (in_array('B8', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B8</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-17">
                        <td class="<?php if (in_array('JS5', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS5</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS6', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS6</td><td></td>
                        <td class="<?php if (in_array('60', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">60</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('59', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">59</td><td></td>
                        <td class="<?php if (in_array('40', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">40</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('39', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">39</td><td></td>
                        <td class="<?php if (in_array('22', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">22</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('21', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">21</td><td></td>
                        <td class="<?php if (in_array('4', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">4</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('3', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">3</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-18">
                        <td class="<?php if (in_array('JS3', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS3</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS4', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS4</td>
                        <td></td><td style="background: #70ad47"></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('38', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">38</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('37', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">37</td>
                        <td></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td rowspan="2" class="<?php if (in_array('B9', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B9</td>
                        <td rowspan="2" style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-19">
                        <td class="<?php if (in_array('JS1', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS1</td>
                        <td style="background: #4472c4"></td>
                        <td class="<?php if (in_array('JS2', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">JS2</td>
                        <td></td>
                        <td class="<?php if (in_array('58', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">58</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('57', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">57</td>
                        <td></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('20', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">20</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('19', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">19</td><td></td>
                        <td class="<?php if (in_array('2', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">2</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('1', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">1</td><td></td>

                    </tr>
                    <tr id="line-20">
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td rowspan="2" class="<?php if (in_array('B10', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B10</td>
                        <td rowspan="2" style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-21">
                        <td></td><td></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>

                    </tr>
                    <tr id="line-22">
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-23">
                        <td class="<?php if (in_array('CJS1', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS1</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td class="<?php if (in_array('C64', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C64</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C63', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C63</td><td></td>
                        <td class="<?php if (in_array('C14', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C14</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C13', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C13</td><td></td>
                        <td class="<?php if (in_array('C16', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C16</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C15', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C15</td><td></td>
                        <td class="<?php if (in_array('C1', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C1</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('A1', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">A1</td><td></td>
                        <td rowspan="2" class="<?php if (in_array('B11', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B11</td>
                        <td rowspan="2" style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-24">
                        <td class="<?php if (in_array('CJS2', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS2</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>

                    </tr>
                    <tr id="line-25">
                        <td class="<?php if (in_array('CJS3', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS3</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td class="<?php if (in_array('C66', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C66</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C65', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C65</td><td></td>
                        <td class="<?php if (in_array('C40', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C40</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C39', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C39</td><td></td>
                        <td class="<?php if (in_array('C18', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C18</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C17', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C17</td><td></td>
                        <td class="<?php if (in_array('C2', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C2</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('A2', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">A2</td><td></td>
                        <td rowspan="2" class="<?php if (in_array('B12', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B12</td>
                        <td rowspan="2" style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-26">
                        <td class="<?php if (in_array('CJS4', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS4</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td class="<?php if (in_array('C68', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C68</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C67', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C67</td><td></td>
                        <td class="<?php if (in_array('C42', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C42</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C41', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C41</td><td></td>
                        <td class="<?php if (in_array('C20', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C20</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C19', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C19</td><td></td>
                        <td class="<?php if (in_array('C3', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C3</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('A3', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">A3</td><td></td>

                    </tr>
                    <tr id="line-27">
                        <td class="<?php if (in_array('CJS5', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS5</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-28">
                        <td class="<?php if (in_array('CJS6', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS6</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td class="<?php if (in_array('C70', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C70</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C69', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C69</td><td></td>
                        <td class="<?php if (in_array('C44', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C44</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C43', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C43</td><td></td>
                        <td class="<?php if (in_array('C22', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C22</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C21', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C21</td><td></td>
                        <td class="<?php if (in_array('C4', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C4</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('A4', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">A4</td><td></td>
                        <td class="<?php if (in_array('B13', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B13</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-29">
                        <td class="<?php if (in_array('CJS7', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS7</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td class="<?php if (in_array('C72', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C72</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C71', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C71</td><td></td>
                        <td class="<?php if (in_array('C46', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C46</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C45', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C45</td><td></td>
                        <td class="<?php if (in_array('C24', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C24</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C23', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C23</td><td></td>
                        <td class="<?php if (in_array('C5', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C5</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('A5', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">A5</td><td></td>
                        <td></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-30">
                        <td class="<?php if (in_array('CJS8', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS8</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('B14', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B14</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-31">
                        <td class="<?php if (in_array('CJS9', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS9</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td class="<?php if (in_array('C74', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C74</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C73', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C73</td><td></td>
                        <td class="<?php if (in_array('C48', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C48</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C47', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C47</td><td></td>
                        <td class="<?php if (in_array('C26', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C26</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C25', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C25</td><td></td>
                        <td class="<?php if (in_array('C6', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C6</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('A6', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">A6</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-32">
                        <td class="<?php if (in_array('CJS10', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS10</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td class="<?php if (in_array('C76', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C76</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C75', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C75</td><td></td>
                        <td class="<?php if (in_array('C50', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C50</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C49', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C49</td><td></td>
                        <td class="<?php if (in_array('C28', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C28</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C27', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C27</td><td></td>
                        <td class="<?php if (in_array('C7', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C7</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('A7', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">A7</td><td></td>
                        <td class="<?php if (in_array('B15', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B15</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-33">
                        <td class="<?php if (in_array('CJS11', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS11</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="<?php if (in_array('B16', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B16</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-34">
                        <td class="<?php if (in_array('CJS12', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS12</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td class="<?php if (in_array('C78', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C78</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C77', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C77</td><td></td>
                        <td class="<?php if (in_array('C52', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C52</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C51', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C51</td><td></td>
                        <td class="<?php if (in_array('C30', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C30</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C29', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C29</td><td></td>
                        <td class="<?php if (in_array('C8', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C8</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('A8', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">A8</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-35">
                        <td class="<?php if (in_array('CJS13', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">CJS13</td>
                        <td style="background: #4472c4"></td><td></td><td></td>
                        <td class="<?php if (in_array('C80', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C80</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C79', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C79</td><td></td>
                        <td class="<?php if (in_array('C54', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C54</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C53', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C53</td><td></td>
                        <td class="<?php if (in_array('C32', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C32</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C31', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C31</td><td></td>
                        <td class="<?php if (in_array('C9', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C9</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('A9', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">A9</td><td></td>
                        <td class="<?php if (in_array('B17', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">B17</td>
                        <td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-36">
                        <td></td><td></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-37">
                        <td></td><td></td><td></td><td></td>
                        <td class="<?php if (in_array('C82', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C82</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C81', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C81</td><td></td>
                        <td class="<?php if (in_array('C56', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C56</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C55', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C55</td><td></td>
                        <td class="<?php if (in_array('C34', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C34</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C33', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C33</td><td></td>
                        <td class="<?php if (in_array('C10', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C10</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('A10', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">A10</td><td></td>
                        <td></td><td></td>
                    </tr>
                    <tr id="line-38">
                        <td></td><td></td><td></td><td></td>
                        <td class="<?php if (in_array('C84', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C84</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C83', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C83</td><td></td>
                        <td class="<?php if (in_array('C58', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C58</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C57', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C57</td><td></td>
                        <td class="<?php if (in_array('C36', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C36</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C35', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C35</td><td></td>
                        <td class="<?php if (in_array('C11', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C11</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('A11', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">A11</td><td></td>
                        <td></td><td></td>
                    </tr>
                    <tr id="line-39">
                        <td></td><td></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td></td><td></td>
                    </tr>
                    <tr id="line-40">
                        <td></td><td></td><td></td><td></td>
                        <td class="<?php if (in_array('C86', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C86</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C85', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C85</td><td></td>
                        <td class="<?php if (in_array('C60', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C60</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C59', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C59</td><td></td>
                        <td class="<?php if (in_array('C38', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C38</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C37', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C37</td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td>
                    </tr>
                    <tr id="line-41">
                        <td></td><td></td><td></td><td></td>
                        <td class="<?php if (in_array('C88', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C88</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C87', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C87</td><td></td>
                        <td class="<?php if (in_array('C62', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C62</td>
                        <td style="background: #70ad47"></td>
                        <td class="<?php if (in_array('C61', $current_slips)) echo 'slip-reserved'; else echo 'slip-number'?>">C61</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td>
                    </tr>
                    <tr id="line-42">
                        <td></td><td></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td>
                    </tr>
                    <tr id="line-43">
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- save a slip modal -->
<div class="modal fade" id="modal_save_slip" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Cornetta's Marina Boat Slip</h4>
            </div>
            <div class="modal-body">
                <form id="modal-save-slip-form">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="modal_save_slip_first_name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="modal_save_slip_last_name">
                    </div>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" id="modal_save_slip_full_name" readonly>
                    </div>
                    <div class="form-group">
                        <label>Vessel Name</label>
                        <input type="text" class="form-control" id="modal_save_slip_vessel_name">
                    </div>
                    <div class="form-group">
                        <label>Street Address</label>
                        <input type="text" class="form-control" id="modal_save_slip_address_1">
                    </div>
                    <div class="form-group">
                        <label>Address 2</label>
                        <input type="text" class="form-control" id="modal_save_slip_address_2">
                    </div>
                    <div class="form-group">
                        <label>City, ST ZIP Code</label>
                        <input type="text" class="form-control" id="modal_save_slip_address_3">
                    </div>
                    <div class="form-group">
                        <label>Home Phone</label>
                        <input type="text" class="form-control" id="modal_save_slip_home_phone">
                    </div>
                    <div class="form-group">
                        <label>Cell Phone</label>
                        <input type="text" class="form-control" id="modal_save_slip_cell_phone">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="modal_save_slip_email">
                    </div>
                    <div class="form-group">
                        <label>Length</label>
                        <input type="number" class="form-control" id="modal_save_slip_length" step="1" required>
                    </div>
                    <div class="form-group">
                        <label>Winter Storage</label>
                        <select class="form-control page-select" id="modal_save_slip_winter_storage">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Shrink Wrap</label>
                        <select class="form-control page-select" id="modal_save_slip_shrink_wrap">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Slip Number</label>
                        <input type="text" class="form-control" id="modal_save_slip_number" readonly>
                    </div>
                    <div class="form-group">
                        <label>Slip Price</label>
                        <input type="number" class="form-control" id="modal_save_slip_price" step="0.01" readonly>
                    </div>
                    <div class="form-group">
                        <label>Winter Storage Price</label>
                        <input type="number" class="form-control" id="modal_save_slip_winter_storage_price" step="0.01" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tax</label>
                        <input type="number" class="form-control" id="modal_save_slip_tax" step="0.01" readonly>
                    </div>
                    <div class="form-group">
                        <label>Total Winter Storage</label>
                        <input type="number" class="form-control" id="modal_save_slip_total_winter_storage" step="0.01" readonly>
                    </div>
                    <div class="form-group">
                        <label>Shrink Wrap Price</label>
                        <input type="number" class="form-control" id="modal_save_slip_shrink_wrap_price" step="0.01" readonly>
                    </div>
                    <div class="form-group">
                        <label>Zipper Door</label>
                        <input type="text" class="form-control" id="modal_save_slip_zipper_door">
                    </div>
                    <div class="form-group">
                        <label>Flybridge</label>
                        <input type="text" class="form-control" id="modal_save_slip_flybridge">
                    </div>
                    <div class="form-group">
                        <label>Mast Up (Sailboat)</label>
                        <input type="text" class="form-control" id="modal_save_slip_mast_up">
                    </div>
                    <div class="form-group">
                        <label>Total Shrink Wrap</label>
                        <input type="text" class="form-control" id="modal_save_slip_total_shrink_wrap">
                    </div>
                    <div class="form-group">
                        <label>Payment Information</label>
                        <select class="form-control page-select" id="modal_save_slip_payment">
                            <option value="1">Check</option>
                            <option value="2">Credit Card</option>
                            <option value="3">Cash</option>
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-link">Save changes</button>
                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<input hidden class="_cost_data" value='<?= json_encode($cost_data); ?>'/>
<?php include(PREPEND_PATH . "views/partials/footer.php"); ?>
<?php include(PREPEND_PATH . "views/partials/foot.php"); ?>
<script>
    let base_url = '';
    let slip_numbers = [];
    let slip_costs = [];
    let winter_cost = 0;
    let slip_tax = 0;
    $(function () {
        base_url = $('meta[name="_base_url"]').attr('content');
        let slip_data = JSON.parse($('._cost_data').val());
        slip_numbers = slip_data.slip_numbers;
        slip_costs = slip_data.slip_costs;
        winter_cost = parseFloat(slip_costs[slip_numbers.indexOf('Winter')]);
        slip_tax = parseFloat(slip_costs[slip_numbers.indexOf('Tax')]);
    });
    $('.slip-number').on('click', function () {
        let slip_number = $(this).text();
        $('#modal_save_slip_number').val(slip_number);
        $('#modal_save_slip_length').val('');
        $('#modal_save_slip_winter_storage_price').val(0);
        $('#modal_save_slip_tax').val(0);
        $('#modal_save_slip_total_winter_storage').val(0);
        $('#modal_save_slip_shrink_wrap_price').val(0);
        $('#modal_save_slip').modal();
    });
    $('#modal_save_slip_length').on('change', function () {
        let slip_length = parseInt($(this).val());
        let slip_number = $('#modal_save_slip_number').val();
        let slip_cost = slip_costs[slip_numbers.indexOf(slip_number)];
        if (!slip_cost) {
            $('#modal_save_slip_price').val(0);
            return;
        }
        let slip_price = slip_length * parseFloat(slip_cost);
        $('#modal_save_slip_price').val(slip_price);
        if ($('#modal_save_slip_winter_storage').val() === 'yes') {
            let winter_storage_price = slip_length * winter_cost;
            let tax_price = winter_storage_price * slip_tax;
            let total_winter_storage = winter_storage_price + tax_price;
            $('#modal_save_slip_winter_storage_price').val(winter_storage_price);
            $('#modal_save_slip_tax').val(tax_price);
            $('#modal_save_slip_total_winter_storage').val(total_winter_storage);
        }
        if ($('#modal_save_slip_shrink_wrap').val() === 'yes') {
            let shrink_wrap_price = slip_length * winter_cost;
            $('#modal_save_slip_shrink_wrap_price').val(shrink_wrap_price);
        }
    });
    $('#modal_save_slip_first_name').on('change', function () {
        let first_name = $(this).val();
        let last_name = $('#modal_save_slip_last_name').val();
        $('#modal_save_slip_full_name').val(first_name + " " + last_name);
    });
    $('#modal_save_slip_last_name').on('change', function () {
        let last_name = $(this).val();
        let first_name = $('#modal_save_slip_first_name').val();
        $('#modal_save_slip_full_name').val(first_name + " " + last_name);
    });
    $('#modal-save-slip-form').on('submit', function (e) {
        e.preventDefault();
        let data = {
            action: "add_slip",
            first_name: $('#modal_save_slip_first_name').val(),
            last_name: $('#modal_save_slip_last_name').val(),
            vessel_name: $('#modal_save_slip_vessel_name').val(),
            address_1: $('#modal_save_slip_address_1').val(),
            address_2: $('#modal_save_slip_address_2').val(),
            address_3: $('#modal_save_slip_address_3').val(),
            home_phone: $('#modal_save_slip_home_phone').val(),
            cell_phone: $('#modal_save_slip_cell_phone').val(),
            email: $('#modal_save_slip_email').val(),
            slip_length: $('#modal_save_slip_length').val(),
            winter_storage: $('#modal_save_slip_winter_storage').val(),
            shrink_wrap: $('#modal_save_slip_shrink_wrap').val(),
            slip_number: $('#modal_save_slip_number').val(),
            slip_price: $('#modal_save_slip_price').val(),
            winter_storage_price: $('#modal_save_slip_winter_storage_price').val(),
            slip_tax: $('#modal_save_slip_tax').val(),
            total_winter_storage: $('#modal_save_slip_total_winter_storage').val(),
            shrink_wrap_price: $('#modal_save_slip_shrink_wrap_price').val(),
            zipper_door: $('#modal_save_slip_zipper_door').val(),
            flybridge: $('#modal_save_slip_flybridge').val(),
            mast_up: $('#modal_save_slip_mast_up').val(),
            total_shrink_wrap: $('#modal_save_slip_total_shrink_wrap').val(),
            payment: $('#modal_save_slip_payment').val(),
        };
        $.ajax({
            url: base_url + '/save-slip-data',
            method: 'post',
            data: data,
            success: function (res) {
                res = JSON.parse(res);
                if (res.status === "success") {
                    customAlert(res.message, true);
                    setTimeout(function () {
                        location.href = base_url + '/slip-data'
                    }, 2000)
                } else customAlert(res.message);
            }
        })
    })
</script>
</body>
</html>
