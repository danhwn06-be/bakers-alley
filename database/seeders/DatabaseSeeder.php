<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $categories = [
            ['id' => 1, 'name' => 'Bánh mặn', 'description' => 'Mô tả bánh mặn...', 'image' => 'banh-man-thu-vi-nhat-1.jpg'],
            ['id' => 2, 'name' => 'Bánh ngọt', 'description' => 'Mô tả bánh ngọt...', 'image' => '20131108144733.jpg'],
            ['id' => 3, 'name' => 'Bánh trái cây', 'description' => 'Mô tả bánh trái cây...', 'image' => 'banhtraicay.jpg'],
            ['id' => 4, 'name' => 'Bánh kem', 'description' => 'Mô tả bánh kem...', 'image' => 'banhkem.jpg'],
            ['id' => 5, 'name' => 'Bánh crepe', 'description' => 'Mô tả bánh crepe...', 'image' => 'crepe.jpg'],
            ['id' => 6, 'name' => 'Bánh Pizza', 'description' => 'Mô tả bánh Pizza...', 'image' => 'pizza.jpg'],
            ['id' => 7, 'name' => 'Bánh su kem', 'description' => 'Mô tả bánh su kem...', 'image' => 'sukemdau.jpg'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }


        
        $rawProducts = [
            [1, 'Bánh Crepe Sầu riêng', 5, '', 150000, 120000, '1430967449-pancake-sau-rieng-6.jpg', 'hộp'],
            [2, 'Bánh Crepe Chocolate', 6, '', 180000, 160000, 'crepe-chocolate.jpg', 'hộp'],
            [3, 'Bánh Crepe Sầu riêng - Chuối', 5, '', 150000, 120000, 'crepe-chuoi.jpg', 'hộp'],
            [4, 'Bánh Crepe Đào', 5, '', 160000, 160000, 'crepe-dao.jpg', 'hộp'],
            [5, 'Bánh Crepe Dâu', 5, '', 160000, 160000, 'crepedau.jpg', 'hộp'],
            [6, 'Bánh Crepe Pháp', 5, '', 200000, 180000, 'crepe-phap.jpg', 'hộp'],
            [7, 'Bánh Crepe Táo', 5, '', 160000, 160000, 'crepe-tao.jpg', 'hộp'],
            [8, 'Bánh Crepe Trà xanh', 5, '', 160000, 150000, 'crepe-traxanh.jpg', 'hộp'],
            [9, 'Bánh Crepe Sầu riêng và Dứa', 5, '', 160000, 150000, 'saurieng-dua.jpg', 'hộp'],
            [11, 'Bánh Gato Trái cây Việt Quất', 3, '', 250000, 250000, '544bc48782741.png', 'cái'],
            [12, 'Bánh sinh nhật rau câu trái cây', 3, '', 200000, 180000, '210215-banh-sinh-nhat-rau-cau-body- (6).jpg', 'cái'],
            [13, 'Bánh kem Chocolate Dâu', 3, '', 300000, 280000, 'banh kem sinh nhat.jpg', 'cái'],
            [14, 'Bánh kem Dâu III', 3, '', 300000, 280000, 'Banh-kem (6).jpg', 'cái'],
            [15, 'Bánh kem Dâu I', 3, '', 350000, 320000, 'banhkem-dau.jpg', 'cái'],
            [16, 'Bánh trái cây II', 3, '', 150000, 120000, 'banhtraicay.jpg', 'hộp'],
            [17, 'Apple Cake', 3, '', 250000, 240000, 'Fruit-Cake_7979.jpg', 'cai'],
            [18, 'Bánh ngọt nhân cream táo', 2, '', 180000, 180000, '20131108144733.jpg', 'hộp'],
            [19, 'Bánh Chocolate Trái cây', 2, '', 150000, 150000, 'Fruit-Cake_7976.jpg', 'hộp'],
            [20, 'Bánh Chocolate Trái cây II', 2, '', 150000, 150000, 'Fruit-Cake_7981.jpg', 'hộp'],
            [21, 'Peach Cake', 2, '', 160000, 150000, 'Peach-Cake_3294.jpg', 'cái'],
            [22, 'Bánh bông lan trứng muối I', 1, '', 160000, 150000, 'banhbonglantrung.jpg', 'hộp'],
            [23, 'Bánh bông lan trứng muối II', 1, '', 180000, 180000, 'banhbonglantrungmuoi.jpg', 'hộp'],
            [24, 'Bánh French', 1, '', 180000, 180000, 'banh-man-thu-vi-nhat-1.jpg', 'hộp'],
            [25, 'Bánh mì Australia', 1, '', 80000, 70000, 'dung-khoai-tay-lam-banh-gato-man-cuc-ngon.jpg', 'hộp'],
            [26, 'Bánh mặn thập cẩm', 1, '', 50000, 50000, 'Fruit-Cake.png', 'hộp'],
            [27, 'Bánh Muffins trứng', 1, '', 100000, 80000, 'maxresdefault.jpg', 'hộp'],
            [28, 'Bánh Scone Peach Cake', 1, '', 120000, 120000, 'Peach-Cake_3300.jpg', 'hộp'],
            [29, 'Bánh mì Loaf I', 1, '', 100000, 100000, 'sli12.jpg', 'hộp'],
            [30, 'Bánh kem Chocolate Dâu I', 4, '', 380000, 350000, 'sli12.jpg', 'cái'],
            [31, 'Bánh kem Trái cây I', 4, '', 380000, 350000, 'Fruit-Cake.jpg', 'cái'],
            [32, 'Bánh kem Trái cây II', 4, '', 380000, 350000, 'Fruit-Cake_7971.jpg', 'cái'],
            [33, 'Bánh kem Doraemon', 4, '', 280000, 250000, 'p1392962167_banh74.jpg', 'cái'],
            [34, 'Bánh kem Caramen Pudding', 4, '', 280000, 280000, 'Caramen-pudding636099031482099583.jpg', 'cái'],
            [35, 'Bánh kem Chocolate Fruit', 4, '', 320000, 300000, 'chocolate-fruit636098975917921990.jpg', 'cái'],
            [36, 'Bánh kem Coffee Chocolate GH6', 4, '', 320000, 300000, 'COFFE-CHOCOLATE636098977566220885.jpg', 'cái'],
            [37, 'Bánh kem Mango Mouse', 4, '', 320000, 300000, 'mango-mousse-cake.jpg', 'cái'],
            [38, 'Bánh kem Matcha Mouse', 4, '', 350000, 330000, 'MATCHA-MOUSSE.jpg', 'cái'],
            [39, 'Bánh kem Flower Fruit', 4, '', 350000, 330000, 'flower-fruits636102461981788938.jpg', 'cái'],
            [40, 'Bánh kem Strawberry Delight', 4, '', 350000, 330000, 'strawberry-delight636102445035635173.jpg', 'cái'],
            [41, 'Bánh kem Raspberry Delight', 4, '', 350000, 330000, 'raspberry.jpg', 'cái'],
            [42, 'Beefy Pizza', 6, 'Thịt bò xay, ngô, sốt BBQ...', 150000, 130000, '40819_food_pizza.jpg', 'cái'],
            [43, 'Hawaii Pizza', 6, 'Sốt cà chua, ham , dứa...', 120000, 120000, 'hawaiian paradise_large-900x900.jpg', 'cái'],
            [44, 'Smoke Chicken Pizza', 6, 'Gà hun khói,nấm, sốt cà chua...', 120000, 120000, 'chicken black pepper_large-900x900.jpg', 'cái'],
            [45, 'Sausage Pizza', 6, 'Xúc xích klobasa, Nấm, Ngô...', 120000, 120000, 'pizza-miami.jpg', 'cái'],
            [46, 'Ocean Pizza', 6, 'Tôm , mực, xào cay...', 120000, 120000, 'seafood curry_large-900x900.jpg', 'cái'],
            [47, 'All Meaty Pizza', 6, 'Ham, bacon, chorizo...', 140000, 140000, 'all1).jpg', 'cái'],
            [48, 'Tuna Pizza', 6, 'Cá Ngừ, sốt Mayonnaise...', 140000, 140000, '54eaf93713081_-_07-germany-tuna.jpg', 'cái'],
            [49, 'Bánh su kem nhân dừa', 7, '', 120000, 100000, 'maxresdefault.jpg', 'cái'],
            [50, 'Bánh su kem sữa tươi', 7, '', 120000, 100000, 'sukem.jpg', 'cái'],
            [51, 'Bánh su kem sữa tươi chiên giòn', 7, '', 150000, 150000, '1434429117-banh-su-kem-chien-20.jpg', 'hộp'],
            [52, 'Bánh su kem dâu sữa tươi', 7, '', 150000, 150000, 'sukemdau.jpg', 'hộp'],
            [53, 'Bánh su kem bơ sữa tươi', 7, '', 150000, 150000, 'He-Thong-Banh-Su-Singapore-Chewy-Junior.jpg', 'hộp'],
            [54, 'Bánh su kem nhân trái cây sữa tươi', 7, '', 150000, 150000, 'foody-banh-su-que-635930347896369908.jpg', 'hộp'],
            [55, 'Bánh su kem cà phê', 7, '', 150000, 150000, 'banh-su-kem-ca-phe-1.jpg', 'hộp'],
            [56, 'Bánh su kem phô mai', 7, '', 150000, 150000, '50020041-combo-20-banh-su-que-pho-mai-9.jpg', 'hộp'],
            [57, 'Bánh su kem sữa tươi chocolate', 7, '', 150000, 150000, 'combo-20-banh-su-que-kem-sua-tuoi-phu-socola.jpg', 'hộp'],
            [58, 'Bánh Macaron Pháp', 2, 'Thưởng thức macaron...', 200000, 180000, 'Macaron9.jpg', 'hộp'],
            [59, 'Bánh Tiramisu - Italia', 2, 'Chỉ cần cắn một miếng...', 200000, 200000, '234.jpg', 'hộp'],
            [60, 'Bánh Táo - Mỹ', 2, 'Bánh táo Mỹ với phần vỏ bánh...', 200000, 200000, '1234.jpg', 'hộp'],
            [61, 'Bánh Cupcake - Anh Quốc', 6, 'Những chiếc cupcake...', 150000, 120000, 'cupcake.jpg', 'cái'],
            [62, 'Bánh Sachertorte', 6, 'Sachertorte là một loại bánh xốp...', 250000, 220000, '111.jpg', 'cái'],
        ];

        foreach ($rawProducts as $item) {
            Product::create([
                'id' => $item[0],
                'name' => $item[1],
                'category_id' => $item[2], // Ép id_type cũ thành category_id chuẩn
                'description' => $item[3],
                'price' => $item[4],
                // Logic: Chỉ set sale_price nếu giá khuyến mãi thực sự RẺ HƠN giá gốc
                'sale_price' => $item[5] < $item[4] ? $item[5] : null, 
                'image' => $item[6],
                'unit' => $item[7],
                // Logic: Cứ mỗi 3 sản phẩm thì tự động đánh dấu 1 cái là Sản phẩm mới (để test trang chủ)
                'is_new' => ($item[0] % 3 === 0) ? true : false,
            ]);
        }
    }
}