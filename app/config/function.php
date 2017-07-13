<?php

function generateToken()
{
    return md5(uniqid(rand(), true));
}