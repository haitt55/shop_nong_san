<?php

function flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');

    if (func_num_args() == 0) {
        return $flash;
    }

    return $flash->info($title, $message);
}

function app_settings($key = null)
{
    $appSettings = app('App\Storage\AppSettingRepositoryInterface');

    return $key ? $appSettings->get($key) : $appSettings;
}

function image($src, $htmlOptions = array(), $noImageSrc = null)
{
    $additionalHtml = '';
    foreach ($htmlOptions as $k => $v) {
        $additionalHtml .= ' ' . $k . '="' . $v . '"';
    }
    if (file_exists(public_path($src))) {
        return '<img src="' . $src . '"' . $additionalHtml . ($noImageSrc ? ' onerror=\'this.src="' . $noImageSrc . '"\'' : '') . '>';
    }
    if ($noImageSrc) {
        return '<img src="' . $noImageSrc . '" width="50">';
    }

    return false;
}

function static_page_path(App\Models\Page $page)
{
    return '/' . $page->slug . '.html';
}

function article_path(App\Models\Article $article)
{
    return '/articles/' . $article->slug . '.html';
}

function product_detail_path(App\Models\Product $product) {
    return '/san-pham/' . $product->slug;
}

function news_detail_path(App\Models\News $news) {
    return '/tin-tuc/' . $news->slug;
}

function category_detail_path(App\Models\ProductCategory $productCategory) {
    return '/danh-muc/' . $productCategory->slug;
}

function policiesl_path(App\Models\IntroducePolicy $policy) {
    return '/chinh-sach/' . $policy->slug;
}

function string_limit($str, $limit = 100, $end = '...')
{
    if (mb_strwidth($str, 'UTF-8') <= $limit) {
        return $str;
    }

    return rtrim(mb_strimwidth($str, 0, $limit, '', 'UTF-8')).$end;
}

function display_money($number)
{
    $currency = app_settings('currency_word');
    if (!$number) {
        return '';
    }

    return number_format($number). ' ' . $currency;
}

function priceDiscount($price, $discount)
{
    $priceDiscount = $price - $price*$discount/100;

    return display_money($priceDiscount);
}

function get_product_by_category($categoryId)
{
    $product = new \App\Models\Product;
    $productRepository = new \App\Storage\Eloquent\ProductRepository($product);
    $products = $productRepository->getListProductByCategory($categoryId);

    return $products;
}

?>