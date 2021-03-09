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
                        <td class="slip-number">56</td><td style="background: #70ad47"></td><td class="slip-number">55</td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-6">
                        <td style="background: #4472c4"></td><td style="background: #4472c4"></td><td style="background: #4472c4"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">54</td><td style="background: #70ad47"></td><td class="slip-number">53</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">18</td><td style="background: #70ad47"></td><td class="slip-number">17</td><td></td>
                        <td class="slip-number">B1</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-7">
                        <td class="slip-number">JS25</td><td style="background: #4472c4"></td><td class="slip-number">JS26</td><td></td>
                        <td class="slip-number">74</td><td style="background: #70ad47"></td><td class="slip-number">73</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">36</td><td style="background: #70ad47"></td><td class="slip-number">35</td><td></td>
                        <td></td><td style="background: #70ad47"></td><td class="slip-number">15</td><td></td>
                        <td class="slip-number">B2</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-8">
                        <td class="slip-number">JS23</td><td style="background: #4472c4"></td><td class="slip-number">JS24</td><td></td>
                        <td class="slip-number">72</td><td style="background: #70ad47"></td><td class="slip-number">71</td><td></td>
                        <td class="slip-number">52</td><td style="background: #70ad47"></td><td class="slip-number">51</td><td></td>
                        <td class="slip-number">34</td><td style="background: #70ad47"></td><td class="slip-number">33</td><td></td>
                        <td class="slip-number">16</td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-9">
                        <td class="slip-number">JS21</td><td style="background: #4472c4"></td><td class="slip-number">JS22</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">50</td><td style="background: #70ad47"></td><td class="slip-number">49</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td class="slip-number">13</td><td></td>
                        <td class="slip-number">B3</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-10">
                        <td class="slip-number">JS19</td><td style="background: #4472c4"></td><td class="slip-number">JS20</td><td></td>
                        <td class="slip-number">70</td><td style="background: #70ad47"></td><td class="slip-number">69</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">32</td><td style="background: #70ad47"></td><td class="slip-number">31</td><td></td>
                        <td class="slip-number">14</td><td style="background: #70ad47"></td><td class="slip-number">11</td><td></td>
                        <td class="slip-number">B4</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-11">
                        <td class="slip-number">JS17</td><td style="background: #4472c4"></td><td class="slip-number">JS18</td><td></td>
                        <td class="slip-number">68</td><td style="background: #70ad47"></td><td class="slip-number">67</td><td></td>
                        <td class="slip-number">48</td><td style="background: #70ad47"></td><td class="slip-number">47</td><td></td>
                        <td class="slip-number">30</td><td style="background: #70ad47"></td><td class="slip-number">29</td><td></td>
                        <td class="slip-number">12</td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-12">
                        <td class="slip-number">JS15</td><td style="background: #4472c4"></td><td class="slip-number">JS16</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">46</td><td style="background: #70ad47"></td><td class="slip-number">45</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td class="slip-number">9</td><td></td>
                        <td class="slip-number">B5</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-13">
                        <td class="slip-number">JS13</td><td style="background: #4472c4"></td><td class="slip-number">JS14</td><td></td>
                        <td class="slip-number">66</td><td style="background: #70ad47"></td><td class="slip-number">65</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">28</td><td style="background: #70ad47"></td><td class="slip-number">27</td><td></td>
                        <td class="slip-number">10</td><td style="background: #70ad47"></td><td class="slip-number">7</td><td></td>
                        <td class="slip-number">B6</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-14">
                        <td class="slip-number">JS11</td><td style="background: #4472c4"></td><td class="slip-number">JS12</td><td></td>
                        <td class="slip-number">64</td><td style="background: #70ad47"></td><td class="slip-number">63</td><td></td>
                        <td class="slip-number">44</td><td style="background: #70ad47"></td><td class="slip-number">43</td><td></td>
                        <td class="slip-number">26</td><td style="background: #70ad47"></td><td class="slip-number">25</td><td></td>
                        <td class="slip-number">8</td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-15">
                        <td class="slip-number">JS9</td><td style="background: #4472c4"></td><td class="slip-number">JS10</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">42</td><td style="background: #70ad47"></td><td class="slip-number">41</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td class="slip-number">5</td><td></td>
                        <td class="slip-number">B7</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-16">
                        <td class="slip-number">JS7</td><td style="background: #4472c4"></td><td class="slip-number">JS8</td><td></td>
                        <td class="slip-number">62</td><td style="background: #70ad47"></td><td class="slip-number">61</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">24</td><td style="background: #70ad47"></td><td class="slip-number">23</td><td></td>
                        <td class="slip-number">6</td><td style="background: #70ad47"></td><td></td><td></td>
                        <td class="slip-number">B8</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-17">
                        <td class="slip-number">JS5</td><td style="background: #4472c4"></td><td class="slip-number">JS6</td><td></td>
                        <td class="slip-number">60</td><td style="background: #70ad47"></td><td class="slip-number">59</td><td></td>
                        <td class="slip-number">40</td><td style="background: #70ad47"></td><td class="slip-number">39</td><td></td>
                        <td class="slip-number">22</td><td style="background: #70ad47"></td><td class="slip-number">21</td><td></td>
                        <td class="slip-number">4</td><td style="background: #70ad47"></td><td class="slip-number">3</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-18">
                        <td class="slip-number">JS3</td><td style="background: #4472c4"></td><td class="slip-number">JS4</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">38</td><td style="background: #70ad47"></td><td class="slip-number">37</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td rowspan="2" class="slip-number">B9</td><td rowspan="2" style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-19">
                        <td class="slip-number">JS1</td><td style="background: #4472c4"></td><td class="slip-number">JS2</td><td></td>
                        <td class="slip-number">58</td><td style="background: #70ad47"></td><td class="slip-number">57</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">20</td><td style="background: #70ad47"></td><td class="slip-number">19</td><td></td>
                        <td class="slip-number">2</td><td style="background: #70ad47"></td><td class="slip-number">1</td><td></td>

                    </tr>
                    <tr id="line-20">
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td rowspan="2" class="slip-number">B10</td><td rowspan="2" style="background: #70ad47"></td>
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
                        <td class="slip-number">CJS1</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td class="slip-number">C64</td><td style="background: #70ad47"></td><td class="slip-number">C63</td><td></td>
                        <td class="slip-number">C14</td><td style="background: #70ad47"></td><td class="slip-number">C13</td><td></td>
                        <td class="slip-number">C16</td><td style="background: #70ad47"></td><td class="slip-number">C15</td><td></td>
                        <td class="slip-number">C1</td><td style="background: #70ad47"></td><td class="slip-number">A1</td><td></td>
                        <td rowspan="2" class="slip-number">B11</td><td rowspan="2" style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-24">
                        <td class="slip-number">CJS2</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>

                    </tr>
                    <tr id="line-25">
                        <td class="slip-number">CJS3</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td class="slip-number">C66</td><td style="background: #70ad47"></td><td class="slip-number">C65</td><td></td>
                        <td class="slip-number">C40</td><td style="background: #70ad47"></td><td class="slip-number">C39</td><td></td>
                        <td class="slip-number">C18</td><td style="background: #70ad47"></td><td class="slip-number">C17</td><td></td>
                        <td class="slip-number">C2</td><td style="background: #70ad47"></td><td class="slip-number">A2</td><td></td>
                        <td rowspan="2" class="slip-number">B12</td><td rowspan="2" style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-26">
                        <td class="slip-number">CJS4</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td class="slip-number">C68</td><td style="background: #70ad47"></td><td class="slip-number">C67</td><td></td>
                        <td class="slip-number">C42</td><td style="background: #70ad47"></td><td class="slip-number">C41</td><td></td>
                        <td class="slip-number">C20</td><td style="background: #70ad47"></td><td class="slip-number">C19</td><td></td>
                        <td class="slip-number">C3</td><td style="background: #70ad47"></td><td class="slip-number">A3</td><td></td>

                    </tr>
                    <tr id="line-27">
                        <td class="slip-number">CJS5</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-28">
                        <td class="slip-number">CJS6</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td class="slip-number">C70</td><td style="background: #70ad47"></td><td class="slip-number">C69</td><td></td>
                        <td class="slip-number">C44</td><td style="background: #70ad47"></td><td class="slip-number">C43</td><td></td>
                        <td class="slip-number">C22</td><td style="background: #70ad47"></td><td class="slip-number">C21</td><td></td>
                        <td class="slip-number">C4</td><td style="background: #70ad47"></td><td class="slip-number">A4</td><td></td>
                        <td class="slip-number">B13</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-29">
                        <td class="slip-number">CJS7</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td class="slip-number">C72</td><td style="background: #70ad47"></td><td class="slip-number">C71</td><td></td>
                        <td class="slip-number">C46</td><td style="background: #70ad47"></td><td class="slip-number">C45</td><td></td>
                        <td class="slip-number">C24</td><td style="background: #70ad47"></td><td class="slip-number">C23</td><td></td>
                        <td class="slip-number">C5</td><td style="background: #70ad47"></td><td class="slip-number">A5</td><td></td>
                        <td></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-30">
                        <td class="slip-number">CJS8</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">B14</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-31">
                        <td class="slip-number">CJS9</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td class="slip-number">C74</td><td style="background: #70ad47"></td><td class="slip-number">C73</td><td></td>
                        <td class="slip-number">C48</td><td style="background: #70ad47"></td><td class="slip-number">C47</td><td></td>
                        <td class="slip-number">C26</td><td style="background: #70ad47"></td><td class="slip-number">C25</td><td></td>
                        <td class="slip-number">C6</td><td style="background: #70ad47"></td><td class="slip-number">A6</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-32">
                        <td class="slip-number">CJS10</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td class="slip-number">C76</td><td style="background: #70ad47"></td><td class="slip-number">C75</td><td></td>
                        <td class="slip-number">C50</td><td style="background: #70ad47"></td><td class="slip-number">C49</td><td></td>
                        <td class="slip-number">C28</td><td style="background: #70ad47"></td><td class="slip-number">C27</td><td></td>
                        <td class="slip-number">C7</td><td style="background: #70ad47"></td><td class="slip-number">A7</td><td></td>
                        <td class="slip-number">B15</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-33">
                        <td class="slip-number">CJS11</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td><td style="background: #70ad47"></td><td></td>
                        <td class="slip-number">B16</td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-34">
                        <td class="slip-number">CJS12</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td class="slip-number">C78</td><td style="background: #70ad47"></td><td class="slip-number">C77</td><td></td>
                        <td class="slip-number">C52</td><td style="background: #70ad47"></td><td class="slip-number">C51</td><td></td>
                        <td class="slip-number">C30</td><td style="background: #70ad47"></td><td class="slip-number">C29</td><td></td>
                        <td class="slip-number">C8</td><td style="background: #70ad47"></td><td class="slip-number">A8</td><td></td>
                        <td style="background: #70ad47"></td><td style="background: #70ad47"></td>
                    </tr>
                    <tr id="line-35">
                        <td class="slip-number">CJS13</td><td style="background: #4472c4"></td><td></td><td></td>
                        <td class="slip-number">C80</td><td style="background: #70ad47"></td><td class="slip-number">C79</td><td></td>
                        <td class="slip-number">C54</td><td style="background: #70ad47"></td><td class="slip-number">C53</td><td></td>
                        <td class="slip-number">C32</td><td style="background: #70ad47"></td><td class="slip-number">C31</td><td></td>
                        <td class="slip-number">C9</td><td style="background: #70ad47"></td><td class="slip-number">A9</td><td></td>
                        <td class="slip-number">B17</td><td style="background: #70ad47"></td>
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
                        <td class="slip-number">C82</td><td style="background: #70ad47"></td><td class="slip-number">C81</td><td></td>
                        <td class="slip-number">C56</td><td style="background: #70ad47"></td><td class="slip-number">C55</td><td></td>
                        <td class="slip-number">C34</td><td style="background: #70ad47"></td><td class="slip-number">C33</td><td></td>
                        <td class="slip-number">C10</td><td style="background: #70ad47"></td><td class="slip-number">A10</td><td></td>
                        <td></td><td></td>
                    </tr>
                    <tr id="line-38">
                        <td></td><td></td><td></td><td></td>
                        <td class="slip-number">C84</td><td style="background: #70ad47"></td><td class="slip-number">C83</td><td></td>
                        <td class="slip-number">C58</td><td style="background: #70ad47"></td><td class="slip-number">C57</td><td></td>
                        <td class="slip-number">C36</td><td style="background: #70ad47"></td><td class="slip-number">C35</td><td></td>
                        <td class="slip-number">C11</td><td style="background: #70ad47"></td><td class="slip-number">A11</td><td></td>
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
                        <td class="slip-number">C86</td><td style="background: #70ad47"></td><td class="slip-number">C85</td><td></td>
                        <td class="slip-number">C60</td><td style="background: #70ad47"></td><td class="slip-number">C59</td><td></td>
                        <td class="slip-number">C38</td><td style="background: #70ad47"></td><td class="slip-number">C37</td><td></td>
                        <td></td><td></td><td></td><td></td>
                        <td></td><td></td>
                    </tr>
                    <tr id="line-41">
                        <td></td><td></td><td></td><td></td>
                        <td class="slip-number">C88</td><td style="background: #70ad47"></td><td class="slip-number">C87</td><td></td>
                        <td class="slip-number">C62</td><td style="background: #70ad47"></td><td class="slip-number">C61</td><td></td>
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
<?php include(PREPEND_PATH . "views/partials/footer.php"); ?>
<?php include(PREPEND_PATH . "views/partials/foot.php"); ?>
<script>

</script>
</body>
</html>
