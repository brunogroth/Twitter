using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace API.Models{
    public class Post{
        public int Id { get; set; }
        public string Text { get; set; }
        public int Likes { get; set; }
        public int Retweets { get; set; }
        [ForeignKey("User")]
        [Column("User")]
        public int User_Id { get; set; }
        public virtual User User { get; set; }

    }
}