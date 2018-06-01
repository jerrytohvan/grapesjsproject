<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkuList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skus_list', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sku_name')->nullable();
            $table->text('desc')->nullable();
            $table->text('url')->nullable();
            $table->text('img')->nullable();
            $table->double('price')->nullable();
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('skus_list')->insert(
      array(
          ['sku_name' => 'Grace Promises For Moms (Hardback)','price' => 14.4,
          'url' => 'https://www.josephprince.com/books/grace-promises-for-moms-hardback?sku=9789811112430',
          'img' => 'https://jpcom.imgix.net/store/artworks/original/7deef068fe937f6dcc2098c04bfea863983b6799a91010cde91a2d19eaa63ed1.png?w=180&auto=format&ixlib=imgixjs-3.1.0',
          'desc' => 'Children are a gift from God, and He desires for all mothers to experience the wondrous joy that motherhood and family life bring. Yet God knows that being a mom is not just about bear hugs and butterfly kisses. When challenges and the daily grind get you down, He invites you to look to Him and find strength through the beautiful promises in His Word! Grace Promises for Mothers, packed with life-giving scriptures and bite-size devotional pieces on parenting and marriage, will lift you up and fill your heart with a confident expectation of good. You’ll be refreshed and encouraged as you rest in God’s all-encompassing love for you and your family, and see His superabounding grace, favor, and blessings flow into every area of your life!'],
           [ 'sku_name' => 'The Prayer of Protection–Living Fearlessly in Dangerous Times',
           'price' => 20.0,
           'url' => 'https://www.josephprince.com/books/the-prayer-of-protection-living-fearlessly-in-dangerous-times-hardback?sku=9781455569120',
           'img' => 'https://jpcom.imgix.net/store/artworks/original/0d866ba9f9fd0f2cbb2134daf52356d2021a3686352d5c19d967305bf9e4bbdc.png?w=180&auto=format&ixlib=imgixjs-3.1.0',
           'desc' => 'We live in dangerous times. A time in which a person could be attacked by terrorists while watching a concert or sipping a latte in his favorite café. A time in which an epidemic from one country could spread to another through a single traveler. A time in which earthquakes, floods, and other calamities seem to be happening all too often. A time of conflict, violence, and wars.

  But there is good news for the believer. God has given us a powerful prayer of protection—Psalm 91—through which we and our families can find safety and deliverance from every snare of the enemy. As you read this book, learn how you can live fearlessly in these dangerous times!
  In The Prayer of Protection, discover a God of love and His impenetrable shield of protection that covers everything that concerns you, and allow His protection to be your reality today.

Through a compelling study of Psalm 91, you’ll learn truths that will cause your heart to burn within you as you discover just how completely loved and protected you are by your loving Savior. Be encouraged as you learn how you and your family can:

Find refuge and safety in the secret place of the Most High God.
Be found at the right place at the right time far from danger.
Activate God’s mighty angels to watch over you and your loved ones.
Go on the offense against the enemy with the sword of the Spirit.
Walk in God’s wisdom to stay safe.
Experience God’s promise of preservation and long life.
The perils that plague us in this day and age are certainly real, but even greater is the reality that you can live protected and untouched as you become anchored in God’s love and in His wonderful promises of protection for you.

Begin to live boldly today as you uncover what the Bible says about the fullness of God’s protection that is available to you in Christ. Let faith arise as you read the amazing testimonies from people around the world who have experienced God’s protection firsthand. And embark on a journey of intimacy with the Lord that will drive out every fear and give you a confident expectation of His goodness toward you.

Learn More: prayerofprotection.com']
      )
  );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('skus_list');
    }
}
