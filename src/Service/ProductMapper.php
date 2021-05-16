<?php


namespace App\Service;
use App\Entity\IntegratorProduct;
use App\Model\Offer;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Doctrine\ORM\EntityManagerInterface;


class ProductMapper
{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }


    public function getDataAction()
    {

        $rawXML = file_get_contents('http://playroom.pl/hurtownia/xml/playroom_xml_2_0_PL.php?key=rgtf4534ergsfrtyAAfger1');
        $rawXML1 = <<<XML
<offers>
<offer>
<param name="product_code">
<![CDATA[ 7500730 ]]>
</param>
<param name="name">
<![CDATA[ Pasante Female Clinic Pack (30 szt.) ]]>
</param>
<param name="ean">
<![CDATA[ 5060150682544 ]]>
</param>
<param name="producer">
<![CDATA[ Pasante (UK) ]]>
</param>
<param name="cat">
<![CDATA[ Prezerwatywy^PASANTE^Opakowania zbiorcze ]]>
</param>
<param name="price_base">
<![CDATA[ 173.45 ]]>
</param>
<param name="tax">
<![CDATA[ 8 ]]>
</param>
<param name="price">
<![CDATA[ 290.28 ]]>
</param>
<param name="price_min">
<![CDATA[ 261.25 ]]>
</param>
<param name="promo">
<![CDATA[ 0 ]]>
</param>
<param name="price_promo">
<![CDATA[ ]]>
</param>
<param name="stock">
<![CDATA[ 1 ]]>
</param>
<param name="availability">
<![CDATA[ 1 ]]>
</param>
<param name="weight">
<![CDATA[ 0.300 ]]>
</param>
<param name="desc">
<![CDATA[ <p><span class="boxText">Jest to prezerwatywa kobieca typu NON-LATEX. W<span class="boxText">ykonana z bardziej miękkiego materiału - polimeru nitrylu dającego prawie </span><span class="boxText">nieodczuwalne uczucie wypełnienia. Jest przezroczysta. Bez lateksu - nie powoduje alergii.<br /></span></span></p> <p><span class="boxText">Długość: 170 mm<br /></span><span class="boxText">Szerokość: 50-70 mm<br /></span><span class="boxText">Grubość: 50m<br /><br /> Opakowanie zbiorcze 1 * 30 szt. (każda sztuka osobno foliowana) <br /></span><span class="boxText"><br /></span></p> ]]>
</param>
<param name="image">
<![CDATA[ http://playroom.pl/30141-thickbox_default/pasante-female-clinic-pack-1-op-30-szt.jpg ]]>
</param>
</offer>
</offers>
XML;


        $rawXML = str_replace('<![CDATA[ ]]>', "<![CDATA[ 0 ]]>", $rawXML);
        $xml = simplexml_load_string($rawXML,"SimpleXMLElement",LIBXML_NOCDATA);
        $json = json_encode($xml);
        $json = str_replace('\n ', "", $json);
        $json = str_replace(' \n', "", $json);


        $this->mapDataAction($json, $this->entityManager);

    }

    public function mapDataAction($json, EntityManagerInterface $entityManager){

        

        $json = json_decode($json,true);
//        var_dump($json['offer'][1]['param'][0]);
        foreach ($json['offer'] as $item){



            $product = new IntegratorProduct();
            $product->setProductCode($item['param'][0]);
            $product->setName(json_encode($item['param'][1],false));
            $product->setEan(json_encode($item['param'][2],false));
            $product->setProducer(json_encode($item['param'][3]));
            $product->setCat(json_encode($item['param'][4],false));
            $product->setPriceBase($item['param'][5]);
            $product->setTax($item['param'][6]);
            $product->setPrice($item['param'][7]);
            $product->setPriceMin($item['param'][8]);
            $product->setPromo($item['param'][9]);
            $product->setStock(json_encode($item['param'][11],false));
            $product->setAvailability($item['param'][12]);
            $product->setWeight($item['param'][13]);
            $product->setDescription($item['param'][14]);
            $product->setImage(json_encode($item['param'][15],false));
            $entityManager->persist($product);
            $entityManager->flush();

//            print_r($product);
        }


    }
}