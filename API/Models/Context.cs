using Microsoft.EntityFrameworkCore;

namespace API.Models{
    public class Context : DbContext{
        public Context(DbContextOptions<Context> options) :
            base(options)
        { }
        public DbSet<User> Users { get; set; }
        public DbSet<Post> Posts { get; set; }
    }
}