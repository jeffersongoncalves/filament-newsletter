<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('email_groups', function (Blueprint $table): void {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('email_group_members', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('email_group_id')->constrained()->cascadeOnDelete();
            $table->string('email');
            $table->boolean('unsubscribed')->default(false);
            $table->timestamp('unsubscribed_at')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamps();
        });

        Schema::create('newsletters', function (Blueprint $table): void {
            $table->id();
            $table->string('subject');
            $table->string('sender_name')->nullable();
            $table->string('sender_email')->nullable();
            $table->longText('content')->nullable();
            $table->string('content_type')->default('rich_text');
            $table->string('status')->default('draft');
            $table->string('route')->unique();
            $table->boolean('published')->default(false);
            $table->boolean('send_unsubscribe_link')->default(true);
            $table->boolean('send_webview_link')->default(true);
            $table->timestamp('scheduled_at')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->unsignedInteger('total_recipients')->default(0);
            $table->unsignedInteger('total_views')->default(0);
            $table->string('utm_campaign')->nullable();
            $table->timestamps();
        });

        Schema::create('email_group_newsletter', function (Blueprint $table): void {
            $table->foreignId('email_group_id')->constrained()->cascadeOnDelete();
            $table->foreignId('newsletter_id')->constrained()->cascadeOnDelete();
            $table->primary(['email_group_id', 'newsletter_id']);
        });

        Schema::create('newsletter_sent_recipients', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('newsletter_id')->constrained()->cascadeOnDelete();
            $table->string('email');
            $table->string('status');
            $table->text('error_message')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();
        });
    }
};
