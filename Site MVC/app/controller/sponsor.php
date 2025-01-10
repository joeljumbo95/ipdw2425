<?php

function main_sponsor(): string
{
    return join("\n", [
        ctrl_head(),
        html_sponsor_body(),
        html_foot(),
    ]);
}