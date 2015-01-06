<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class PlayerAudio extends Eloquent
{
	protected $table = 'player_audio';

    protected $fillable = ['player_id', 'audio_id'];

    public $timestamps = false;

    public static function getAudioByPlayer($playerId)
    {
        $data = DB::table('player_audio')
            ->join('audio_settings', 'player_audio.audio_id', '=', 'audio_settings.id')
            ->select('audio_settings.id', 'audio_settings.src', 'audio_settings.start_time', 'audio_settings.end_time', 'audio_settings.volume')
            ->where('player_audio.player_id', '=', $playerId)
            ->get();
        return isset($data[0]) ? $data[0] : false;
    }
}
