class Helpers {
    toTextDuration = (duration) => {
        if(typeof(duration) != "number") {
            return "unknown";
        }

        duration = Math.round(duration);

        if(duration < 60) {
            return duration + "m";
        } else  {
            return Math.floor(duration/60) + "h " + (duration%60) + "m";
        }  
    }
}