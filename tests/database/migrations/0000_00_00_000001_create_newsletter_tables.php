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
            $table->string('title')->unique();
            $table->timestamps();
        });

        Schema::create('email_group_members', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('email_group_id')->constrained('email_groups')->cascadeOnDelete();
            $table->string('email');
            $table->boolean('unsubscribed')->default(false);
            $table->dateTime('unsubscribed_at')->nullable();
            $table->dateTime('confirmed_at')->nullable();
            $table->timestamps();

            $table->unique(['email_group_id', 'email']);
        });

        Schema::create('newsletters', function (Blueprint $table): void {
            $table->id();
            $table->string('subject');
            $table->string('sender_name')->nullable();
            $table->string('sender_email');
            $table->longText('content');
            $table->string('content_type')->default('rich_text');
            $table->string('status')->default('draft')->index();
            $table->string('route')->nullable()->unique();
            $table->boolean('published')->default(false);
            $table->boolean('send_unsubscribe_link')->default(true);
            $table->boolean('send_webview_link')->default(false);
            $table->dateTime('scheduled_at')->nullable();
            $table->dateTime('sent_at')->nullable();
            $table->unsignedInteger('total_recipients')->default(0);
            $table->unsignedInteger('total_views')->default(0);
            $table->string('utm_campaign')->nullable();
            $table->timestamps();
        });

        Schema::create('newsletter_email_group', function (Blueprint $table): void {
            $table->foreignId('newsletter_id')->constrained('newsletters')->cascadeOnDelete();
            $table->foreignId('email_group_id')->constrained('email_groups')->cascadeOnDelete();

            $table->primary(['newsletter_id', 'email_group_id']);
        });

        Schema::create('newsletter_sent_recipients', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('newsletter_id')->constrained('newsletters')->cascadeOnDelete();
            $table->string('email');
            $table->string('status');
            $table->text('error_message')->nullable();
            $table->dateTime('sent_at')->nullable();
            $table->timestamps();

            $table->index(['newsletter_id', 'email']);
            $table->index(['newsletter_id', 'status']);
        });
    }
};
