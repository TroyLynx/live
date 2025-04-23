#!/bin/bash

# Simulating a script that looks up user info (vulnerable)
if [ -z "$1" ]; then
    echo "Usage: $0 <username>"
    exit 1
fi

# 🚨 VULNERABLE: Directly executing user input in a command
echo "Looking up user: $1"
eval "$1"
