<?php

/** @var \Magento\Catalog\Model\Category $category */
$category = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Category');
$category->isObjectNew(true);
$category
    ->setId(333)
    ->setCreatedAt('2014-06-23 09:50:07')
    ->setName('Main category')
    ->setParentId(2)
    ->setPath('1/2/333')
    ->setLevel(3)
    ->setAvailableSortBy('name')
    ->setDefaultSortBy('name')
    ->setIsActive(true)
    ->setPosition(1)
    ->setAvailableSortBy(['position'])
    ->setImageTeaserParagraph('Image Teaser Paragraph')
    ->save();

$category = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Category');
$category->isObjectNew(true);
$category
    ->setId(334)
    ->setCreatedAt('2014-06-23 09:50:07')
    ->setName('First subcategory')
    ->setParentId(333)
    ->setPath('1/2/333/334')
    ->setLevel(4)
    ->setAvailableSortBy('name')
    ->setDefaultSortBy('name')
    ->setIsActive(true)
    ->setPosition(1)
    ->setAvailableSortBy(['position'])
    ->save();

$category = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Category');
$category->isObjectNew(true);
$category
    ->setId(335)
    ->setCreatedAt('2014-06-23 09:50:07')
    ->setName('Second subcategory')
    ->setParentId(333)
    ->setPath('1/2/333/335')
    ->setLevel(4)
    ->setAvailableSortBy('name')
    ->setDefaultSortBy('name')
    ->setIsActive(true)
    ->setPosition(1)
    ->setAvailableSortBy(['position'])
    ->setIncludeInMenu(0)
    ->setCategoryIcon('icon.png')
    ->setImageTeaser('teaser.png')
    ->setImageTeaserHeadline('Image Teaser Headline')
    ->setImageTeaserSubheadline('Image Teaser Subheadline')
    ->setImageTeaserButtonLabel('Image Teaser Button Label')
    ->setImageTeaserButtonLink('url')
    ->save();

$category = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Category');
$category->isObjectNew(true);
$category
    ->setId(336)
    ->setCreatedAt('2014-06-23 09:50:07')
    ->setName('Third subcategory')
    ->setParentId(333)
    ->setPath('1/2/333/336')
    ->setLevel(4)
    ->setAvailableSortBy('name')
    ->setDefaultSortBy('name')
    ->setIsActive(true)
    ->setPosition(1)
    ->setAvailableSortBy(['position'])
    ->setIncludeInMenu(0)
    ->save();


$category = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Category');
$category->isObjectNew(true);
$category
    ->setId(337)
    ->setCreatedAt('2014-06-23 09:50:07')
    ->setName('Subcategory of third subcategory')
    ->setParentId(336)
    ->setPath('1/2/333/336/337')
    ->setLevel(5)
    ->setAvailableSortBy('name')
    ->setDefaultSortBy('name')
    ->setIsActive(true)
    ->setPosition(1)
    ->setAvailableSortBy(['position'])
    ->save();
